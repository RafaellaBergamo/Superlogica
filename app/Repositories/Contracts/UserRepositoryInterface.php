<?php
namespace App\Repositories\Contracts;

use App\Models\UserModel;
use App\User;

interface UserRepositoryInterface 
{
    public function __construct(UserModel $user);
    public function findAll();
    public function create(User $user);
}