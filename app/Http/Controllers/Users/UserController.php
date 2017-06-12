<?php

namespace App\Http\Controllers\Users;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\SpaceInterface\User\UserInterface;

class UserController extends BaseController
{
    //

    public function show($id)
    {
        return 'Yes it works ID '.$id;
    }

    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }

    public function getAllUsers(UserInterface $user)
    {
        return $user->getAllUsers();
    }
}