<?php
namespace App\Services;

use App\Services\Contracts\UserServiceInterface;
use App\Repositories\UserRepository;

class UserService implements UserServiceInterface
{   
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function listUsers()
    {
        return $this->userRepository->getAllUsers();
    }
    public function getUserById(int $id){
        return $this->userRepository->getUserById($id);
    }
    public function createUser(array $data){
        return $this->userRepository->createUser($data);
    }
    public function updateUser(int $id, array $data){
        return $this->userRepository->updateUser($id, $data);
    }
    public function destroyUser($user){
        
         $this->userRepository->destroyUser($user);
    }
   
}