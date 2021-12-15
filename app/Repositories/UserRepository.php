<?php

namespace App\Repositories;

use App\Models\UserModel;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    private $model;

    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }
    
    public function findAll()
    {
        return $this->model->all();
    }
        
    public function findOne(int $id)
    {
        dd($this->model->find($id));
        //return $this->model->find($id);
    }

    public function create(User $user) 
    {
        $newUser = $this->model;
        $newUser->name = $user->getName();
        $newUser->userName = $user->getUserName();
        $newUser->zipCode = $user->getZipCode();
        $newUser->email = $user->getEmail();
        $newUser->password = bcrypt($user->getPassword());

        return $newUser->save();
    }

}
