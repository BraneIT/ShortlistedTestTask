<?php
namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface{

    public function getAllUsers()
    {
        return User::paginate(10);
    }
    public function getUserById($id){
        return User::find($id);
    }
    public function createUser(array $data)
    {
        return User::create($data);
    }
    public function updateUser($id, array $data)
    {
        return $this->getUserById($id)->update($data);
    }
    public function destroyUser($id){
        
        return $this->getUserById($id)->delete();
    }
}
