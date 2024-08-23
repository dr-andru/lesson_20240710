<?php

namespace Controllers\Api;

use Models\User;
use Request\Post;

class Login
{
    /**
     * @param Post $request
     * @return string
     */
    public function postRequest(Post $request): string
    {
        $salt = rand(1000, 9999);

        $password = $request->get("password");


        $hash = md5($salt . '|' . $password);

        $hash = $salt . '|' .$hash;

        print_r($hash);
        die();
        $allUsers = User::getAllUsers();
        print_r($allUsers);
        return '';
    }
}
