<?php
namespace App\Http\Controllers\Brand\Auth;


use App\Models\Brandaccount;
use Illuminate\Http\Request;
use Facades\App\Helper\Helper;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends Controller
{
    public function index()
    {
            if(View::exists('brands.login'))
            {
                return view('brands.login');
            }
    }
    public function processLogin(LoginRequest $request)
    {

        return('sddsd');
        $remember_me = $request->has('remember_me') ? true:false;
        if(auth()->guard('brandaccount')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me))
       {
            return  'fgfdg';

        }
        // dd($request);

        return redirect()->back();
        // abort(Response::HTTP_NOT_FOUND);
    }



    // public function processLogin(Request $request)
    // {
    //      dd($request->all());
    //     $credentials = $request->except(['_token']);

    //     if(isBrandaccountActive($request->email))
    //     {
    //         if(Auth::guard('brandaccount')->attempt($credentials))
    //         {

    //             return redirect(RouteServiceProvider::BRANDACCOUNT);
    //         }

    //         return redirect()->action([
    //             LoginController::class,
    //             'login'
    //         ])->with('email','Credentials not matced in our records!');
    //    }

    //     return redirect()->action([
    //         LoginController::class,
    //         'login'
    //     ])->with('email','You are not an active brandaccounts!');
    // }
}
