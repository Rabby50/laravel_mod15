<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name =  "Donal Trump";
        $age ="75";

        $data = [
                "id"=>$id,
                 "name"=>$name,
                 "age"=>75
                ];

        $cookie_name = "access_token";
        $cookie_value = "123-XYZ";
        $minutes = 1; 
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true; 
        
        setcookie($cookie_name, $cookie_value, time() + ($minutes * 60), $path, $domain, $secure, $httpOnly);
        
        print_r($data);


    }
}
