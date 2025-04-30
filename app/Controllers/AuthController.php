<?php

namespace App\Controllers;

use \App\Models\User;

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

    public function register($request){
        $response = $this->response(301);
        $response = $response->withHeader('Location', APPURL);
        return $response;
    }
}
