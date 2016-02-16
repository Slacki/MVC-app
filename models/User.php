<?php

namespace App\models;

use Framework\Model;

/**
 * Class User
 * Can anybody think of simpler way of doing this? ;)
 * @package App\models
 */
class User extends Model
{
    const username = 'admin';
    const password = 'admin';

    public function authenticate($username, $password)
    {
        if ($username === User::username && $password === User::password) {
            return true;
        }

        return false;
    }
}