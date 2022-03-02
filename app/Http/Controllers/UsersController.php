<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function livewireindex(){
        return view('admin.users.view');
    }
    public function index(Request $request)
        {
            $data = User::orderBy('id','DESC')->paginate(5);
            return $data;
            return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        }

        public function create()
        {
            $roles = Role::pluck('name','name')->all();
            return view('users.create',compact('roles'));
        }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
        ->with('success','User created successfully');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
        public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit',compact('user','roles','userRole'));
    }
    public function update(Request $request, $id)
    {
            $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
            ]);
            $input = $request->all();
            if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
            }else{
            $input = array_except($input,array('password'));
            }
            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
            return redirect()->route('users.index')
            ->with('success','User updated successfully');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
        ->with('success','User deleted successfully');
    }

    public function logon(Request $request)
    {

                    $validator =  Validator::make($request->all(),[
                        'email' => 'required|email|exists:brandaccounts,email',
                        'password' => 'required|exists:brandaccounts,password',
                    ],[
                    'email.required' => 'مطلوب'  ,
                    'password.exists' => 'الباسورد غير صحيح '
                     ]);

                if( Auth::guard('brandaccount')->attempt(['email' => $request->email,'password'=>$request->password],$request->remember_me)){
                    return redirect()->route('front');
                    }

                if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
                    }

    }

    public function logout(Request $request)
    {
    Auth::guard('brandaccount')->logout();
        //  $request->session()->invalidate();
    $request->session()->regenerateToken();
        // if ($response = $this->loggedOut($request)) {
        //     return $response;
        // }
        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->route('front');
    }
}
