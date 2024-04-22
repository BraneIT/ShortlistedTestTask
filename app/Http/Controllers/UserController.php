<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;


class UserController extends Controller
{   
    protected UserService $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function index(){
        $users = $this->userService->listUsers();
        return view("users.index", compact("users"));
    }
    public function create(){
        return view("users.create");
    }
    public function store(CreateUserRequest $request){

        $this->userService->createUser($request->validated());
        return redirect()->route("home")->with("success","User inserted successfully");
    }
    public function edit($id){
        $user = $this->userService->getUserById($id);
        return view("users.edit", compact("user"));
    }
    public function update($id,UpdateUserRequest $request){
      
        $this->userService->updateUser($id,$request->validated());
        return redirect()->route("home")->with("success","User succesfully edited");
    }
    public function destroy($id){
       
        $this->userService->destroyUser($id);
        return redirect()->route("home")->with("success","User succesfully deleted");
    }

}
