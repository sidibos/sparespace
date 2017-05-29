<?php
namespace App\SpaceInterface\User;

Interface UserInterface
{
    public function getUser($id);

    public function createUser(array $data);

    public function deleteUser($id);

    public function updateUser(array $data, $id);

}
