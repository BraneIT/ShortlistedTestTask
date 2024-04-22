<?php
namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use App\Models\User;

interface UserRepositoryInterface{
      /**
     * Retrieve a paginated list of users.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllUsers();

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
     * Delete a user by their ID.
     *
     * @param int $id
     * @return bool 
     */
    public function destroyUser(int $id);
}