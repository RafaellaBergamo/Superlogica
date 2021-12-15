<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;

class UserController extends BaseController
{
    public function register(CreateUserRequest $request, UserRepositoryInterface $repository) 
    {
        return $request->name;
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
            'success' => $ok,
            'message' => $ok ? 'Usuário cadastrado com sucesso!!' : 'Ocorreu um erro ao cadastrar usuário'
        ]);
    }

    public function search(UserRepositoryInterface $repository) 
    {
        return $repository->findAll();
    }
    
}
