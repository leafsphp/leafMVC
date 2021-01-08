<?php

use Leaf\Helpers\Password;

return [
    /*
    |--------------------------------------------------------------------------
    | Generate timestamps
    |--------------------------------------------------------------------------
    |
    | Automatically generate created_at/updated_at timestamps for register
    | and update methods
    |
    */
    "USE_TIMESTAMPS" => true,

    /*
    |--------------------------------------------------------------------------
    | Encode password
    |--------------------------------------------------------------------------
    |
    | Password encode is run when leaf wants to encode passwords on register
    | This exact method is used by default in Leaf, so you can delete it if
    | you want to.
    |
    */
    "PASSWORD_ENCODE" => function ($password) {
        return Password::hash($password);
    },

    /*
    |--------------------------------------------------------------------------
    | Verify Password
    |--------------------------------------------------------------------------
    |
    | this function is run to verify the password. It's done by default,
    | so you can remove/set this and the above lines null if you wish to.
    |
    */
    "PASSWORD_VERIFY" => function ($password, $hashedPassword) {
        // Inside the password_verify method, you have access to the password and the hashed password
        return Password::verify($password, $hashedPassword);
    },

    /*
    |--------------------------------------------------------------------------
    | Password Key
    |--------------------------------------------------------------------------
    |
    | the default password key
    |
    */
    "PASSWORD_KEY" => "password",

    /*
    |--------------------------------------------------------------------------
    | Hide id
    |--------------------------------------------------------------------------
    |
    | Hide id field from user object?
    |
    */
    "HIDE_ID" => true,

    /*
    |--------------------------------------------------------------------------
    | Hide password
    |--------------------------------------------------------------------------
    |
    | Hide user password field
    |
    */
    "HIDE_PASSWORD" => true,

    /*
    |--------------------------------------------------------------------------
    | Login params error
    |
    */
    "LOGIN_PARAMS_ERROR" => "Username not registered!",

    /*
    |--------------------------------------------------------------------------
    | Login password error
    |
    */
    "LOGIN_PASSWORD_ERROR" => "Password is incorrect!",

    /*
    |--------------------------------------------------------------------------
    | Use session [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | Use session based authentication instead of the default JWT based auth.
    |
    | If you encounter any problems using any new auth session features,
    | revert to the default auth and manage sessions manually.
    | Don't forget to open an issue.
    |
    */
    "USE_SESSION" => false,

    /*
    |--------------------------------------------------------------------------
    | Template Engine [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | Leaf MVC unlike other frameworks tries to give you as much control as
    | you need. As such, you can decide which view engine to use.
    |
    */
    // Create a session on registration?
    "SESSION_ON_REGISTER" => false,

    /*
    |--------------------------------------------------------------------------
    | Login page route
    |
    */
    "GUARD_LOGIN" => "/auth/login",

    /*
    |--------------------------------------------------------------------------
    | Rehgister page route
    |
    */
    "GUARD_REGISTER" => "/auth/register",

    /*
    |--------------------------------------------------------------------------
    | Logout route
    |
    */
    "GUARD_LOGOUT" => "/auth/logout",

    /*
    |--------------------------------------------------------------------------
    | Home page route
    |
    */
    "GUARD_HOME" => "/home",

    /*
    |--------------------------------------------------------------------------
    | JWT + Session
    |--------------------------------------------------------------------------
    |
    | Add an auth token to the auth session?
    |
    */
    "SAVE_SESSION_JWT" => false,
];
