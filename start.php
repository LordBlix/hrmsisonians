<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces And Routes
|--------------------------------------------------------------------------
|
| When a module starting, this file will executed automatically. This helps
| to register some namespaces like translator or view. Also this file
| will load the routes file for each module. You may also modify
| this file as you want.
|
*/


//require __DIR__ . '/routes/web.php';

if (!function_exists('user')) {

    /**
     * Return current logged in user
     */
    function user()
    {
        $user = \Illuminate\Support\Facades\Auth::guard('employees')->user();

        if (is_a($user, '\Models\User')) {
            \Illuminate\Support\Facades\Session::set('user', $user);

            return $user;
        }
        else {
            return null;
        }
    }

}


if (!function_exists('admin')) {

    /**
     * Returns current school according to the current domain
     * @return School|null
     */
    function admin()
    {

        $admin = \Illuminate\Support\Facades\Auth::guard('admin')->user();

        if (is_a($admin, '\Models\User')) {
            \Illuminate\Support\Facades\Session::set('user', $admin);

            return $admin;
        }
        else {
            return null;
        }
    }

}

