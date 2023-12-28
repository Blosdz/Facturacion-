<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illumite\Support\Facades\Config;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo='/dashboard';
    
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('system.auth.login');
    }

    protected function guard(){
        return Auth::guard('admin');
    }
}
