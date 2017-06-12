<?php

namespace App\SpaceInterface\User;

use App\User;

class UserContract implements UserInterface
{
    public function getUser($id) {
        return User::find($id);
    }

    public function createUser(array $data) {
        User::save($data);
    }

    public function deleteUser($id) {
        $userObj = User::find($id);
        $userObj->delete();
    }

    public function updateUser(array $data, $id) {
        $userObj = User::find($id);

        $userObj->save($data);
    }

    public function getAllUsers()
    {
        return User::all();
    }
}
