<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function register(Request $request) 
    {
        $this->validate($request);

        $ok = User::insert([
            'name'             => $request->name,
            'userName'         => $request->userName,
            'zipCode'          => $request->zipCode,
            'email'            => $request->email,
            'password'         => $request->password
        ]);

        return $ok;
    }

    private function validate($request) {

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
