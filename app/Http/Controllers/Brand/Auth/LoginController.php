<?php
namespace App\Http\Controllers\Brand\Auth;

use Illuminate\Http\Request;
use Facades\App\Helper\Helper;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Brandaccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login()
    {

        if(View::exists('brands.login'))
        {
            return view('brands.login');
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->except(['_token']);

        // if(isBrandaccountActive($request->email))
        // {
            if(Auth::guard('brandaccount')->attempt($credentials))
            {
                return redirect(RouteServiceProvider::Brandaccount);
            }
            return redirect()->action([
                LoginController::class,
                'login'
            ])->with('message','Credentials not matced in our records!');
       // }
        return redirect()->action([
            LoginController::class,
            'login'
        ])->with('message','You are not an active brandaccounts!');
    }
}
