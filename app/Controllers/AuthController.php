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
        $username = trim($request->getParsedBody()['username']);
        $password = trim($request->getParsedBody()['password']);
        $user = $this->user($username);

        if($user != false && password_verify($password, $user['password'])){
            $_SESSION['user'] = $username;

            $response = $this->response(301);
            $response = $response->withHeader('Location', APPURL);
            return $response;

        }

        return $this->view('auth/login');
    }

    public function registerForm($request){
        return $this->view('auth/register');
    }

    public function register($request){
        $name = trim($request->getParsedBody()['name']);
        $username = trim($request->getParsedBody()['username']);
        $password = trim($request->getParsedBody()['password']);
        $password_c = trim($request->getParsedBody()['password_c']);

        if($password != $password_c){
            $response = $this->response(301);
            $response = $response->withHeader('Location', APPURL.'/reg');
            return $response;
        }

        $user = $this->user($username);
        if($user != false){
            return $this->view('auth/login');
        }

        $stmt = User::prepare("INSERT INTO users VALUES(null, ?, ?, ?);");
        $result = $stmt->execute([$username, $name, password_hash($password, PASSWORD_DEFAULT)]);
        if(!$result) throw new \Exception("Error");

        $_SESSION['user'] = $username;
        
        
        $response = $this->response(301);
        $response = $response->withHeader('Location', APPURL);
        return $response;
    }

    public function logout($request){
        unset($_SESSION['user']);
        $response = $this->response(301);
        $response = $response->withHeader('Location', APPURL);
        return $response;

    }

    private function user($username){
        $stmt = User::prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
}
