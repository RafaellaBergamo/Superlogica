<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function register(Request $request) {
        $rules = [
            'name' => 'required|min:10', 
            'userName' => 'required|min:5', 
            'zipCode' => 'required|min:8', 
            'email' => 'required|min:10',
            'password' => 'required|min:8'
        ];
        $request->validate($rules);
        
    }
}
