<?php

namespace App\Controllers;

class AuthController extends Controller
{
    public function loginForm($request)
    {
        
        return $this->view('auth/login');
    }
    public function login($request){
        return $this->response(200);
    }

    public function registerForm($request){
        return $this->view('auth/register');
    }
}
