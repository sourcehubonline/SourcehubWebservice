<?php

namespace App\Helper;

use Illuminate\Support\Facades\Hash;

class LoginHelper
{

    public static function HashPassWord($password): string{

        if($password == null){


            die('Password is empty');
            //return "";

        }

        return Hash::make($password);


    }

}