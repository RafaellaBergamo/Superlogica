<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;

class UserController extends BaseController
{
    public function register(Request $request, UserRepositoryInterface $repository) 
    {
        $this->validate($request);
        $newUser = [
            'name' => $request->name,
            'userName' => $request->userName,
            'zipCode' => $request->zipCode,
            'email' => $request->email, 
            'password' => $request->password
        ];

        $user = new User($newUser);

        $ok = $repository->create($user);

        return response()->json([
            'success' => $ok
        ]);
    }

    public function search(UserRepositoryInterface $repository) 
    {
        return $repository->findAll();
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
