<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyCookie extends Model
{
    use HasFactory;

    public static function exists($name)
    {
        return (isset($_COOKIE[$name])) ? true : false;
    }

    public static function visitorId()
    {
        $name = strtolower(env('APP_NAME') . '_cart');
        if (Auth::guest() && !self::exists($name)) {
            return setcookie($name, uniqid(), time() + 100000, '/') ? true : '';
        }
        return false;
    }


    public static function get($name)
    {
        if(self::exists($name))
        {
            return $_COOKIE[$name];
        }
    }

    public static function visitorIdDelete()
    {

        $name = strtolower(env('APP_NAME') . '_cart');
        // dd($_COOKIE[$name]);
        if (self::exists($name)) {
            return setcookie($name, '', time() + 1, '/') ? true : false;
        }
        // dd(self::get($name));
        return false;
    }
}
