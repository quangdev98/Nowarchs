<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function guard()
    {
        return Auth::guard('admins');
    }

    public function getLogin()
    {
        try {
            if(Auth::guard('admins')->user()) {
                return redirect()->route('admin.index');
            }
            // dd(Auth::guard('admins')->user());
            return view('admin::auth.login');   
        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function authenticate(Request $request)
    {
        try {
            $dataLogin = $request->only(['email', 'password']);
            if(Auth::guard('admins')->attempt($dataLogin)) {
                Auth::shouldUse('admins');
                return redirect()->route('admin.index');
            }
            return redirect('/login');

        } catch (\Exception $e) {
            abort('500');
        }
    }

    public function logout()
    {
        try {
            auth('admins')->logout();
            return redirect() -> route('admin.auth.login');
        } catch (\Exception $e) {
            abort('500');
        }
    }


}
