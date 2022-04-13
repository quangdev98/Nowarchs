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
        if(Auth::guard('admins')->user()) {
            return redirect()->route('admin.index');
        }
        return view('admin::auth.login');
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


}
