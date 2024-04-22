<?php
namespace App\Services\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;



interface UserServiceInterface
{
    /**
     * Retrieve a list of all users.
     *
     * @return Collection
     */
    public function listUsers();

    /**
     * Retrieve a user by their ID.
     *
     * @param int $id 
     * @return User|null 
     */
    public function getUserById(int $id);

    /**
     * Create a new user.
     *
     * @param array $data 
     * @return User|null 
     */
    public function createUser(array $data);

    /**
     * Update a user by their ID.
     *
     * @param int $id 
     * @param array $data 
     * @return bool 
     */
    public function updateUser(int $id, array $data);

    /**
     * Delete a user.
     *
     * @param int $user
     * @return bool
     */
    public function destroyUser($user);
}
