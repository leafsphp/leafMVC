<?php

use Leaf\Helpers\Password;

return [
    /*
    |--------------------------------------------------------------------------
    | Database table
    |--------------------------------------------------------------------------
    |
    | This is the table that leaf auth will perform authentication
    | checks on and edit/retrieve users from.
    |
    */
    'DB_TABLE' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Use session
    |--------------------------------------------------------------------------
    |
    | Use session based authentication instead of the default JWT based auth.
    |
    */
    'USE_SESSION' => true,

    /*
    |--------------------------------------------------------------------------
    | Generate timestamps
    |--------------------------------------------------------------------------
    |
    | Automatically generate created_at/updated_at timestamps for register
    | and update methods
    |
    */
    'USE_TIMESTAMPS' => true,

    /*
    |--------------------------------------------------------------------------
    | Set timestamps format
    |--------------------------------------------------------------------------
    |
    | Use this property to specify the format that you want your timestamps to be saved in.
    | Be aware that auth uses the leafs/date module, so the accepted formats are listed in the leafs/date documentation
    |
    */
    'TIMESTAMP_FORMAT' => 'c',

    /*
    |--------------------------------------------------------------------------
    | Encode password
    |--------------------------------------------------------------------------
    |
    | Password encode is run when leaf wants to encode passwords on register
    | This exact method is used by default in Leaf, so you can set it to null
    | if you want to.
    |
    | You can set your own implementation instead of Password::hash
    |
    */
    'PASSWORD_ENCODE' => function ($password) {
        return Password::hash($password);
    },

    /*
    |--------------------------------------------------------------------------
    | Verify Password
    |--------------------------------------------------------------------------
    |
    | This function is run to verify the password. This implementation is done
    | by default, so you can set it to null, and it will still work fine.
    |
    | You can add your own implementation instead of Password::verify
    |
    */
    'PASSWORD_VERIFY' => function ($password, $hashedPassword) {
        return Password::verify($password, $hashedPassword);
    },

    /*
    |--------------------------------------------------------------------------
    | Password Key
    |--------------------------------------------------------------------------
    |
    | The default password key. Leaf will expect this key to hold passwords
    | in your database.
    |
    */
    'PASSWORD_KEY' => 'password',

    /*
    |--------------------------------------------------------------------------
    | ID Key
    |--------------------------------------------------------------------------
    |
    |  Set your primary key name. For instance, you might have used id_user instead of id.
    |  This setting allows you to quickly switch your key name
    |
    */
    'ID_KEY' => 'id',

    /*
    |--------------------------------------------------------------------------
    | Hide id
    |--------------------------------------------------------------------------
    |
    | Hide id field from user object returned in login, register and update
    |
    */
    'HIDE_ID' => true,

    /*
    |--------------------------------------------------------------------------
    | Hide password
    |--------------------------------------------------------------------------
    |
    | Hide password from user object returned in login, register and update
    |
    */
    'HIDE_PASSWORD' => true,

    /*
    |--------------------------------------------------------------------------
    | Login params error
    |--------------------------------------------------------------------------
    |
    | Error to show when the login params aren't found in db
    |
    */
    'LOGIN_PARAMS_ERROR' => 'Username not registered!',

    /*
    |--------------------------------------------------------------------------
    | Password error
    |--------------------------------------------------------------------------
    |
    | Error to show when the login password is wrong
    |
    */
    'LOGIN_PASSWORD_ERROR' => 'Password is incorrect!',

    /*
    |--------------------------------------------------------------------------
    | Session on register
    |--------------------------------------------------------------------------
    |
    | If true, a session will be created on a successful registration, else
    | you it'll be created on login rather.
    |
    */
    'SESSION_ON_REGISTER' => false,

    /*
    |--------------------------------------------------------------------------
    | Session redirect on login
    |--------------------------------------------------------------------------
    |
    | When set to true, the options set in GUARD_LOGIN, GUARD_REGISTER and GUARD_HOME
    | will be used to redirect the user to the right page based on their state.
    | Set to false to not redirect on login
    |
    */
    'SESSION_REDIRECT_ON_LOGIN' => true,

    /*
    |--------------------------------------------------------------------------
    | Session redirect on register
    |--------------------------------------------------------------------------
    |
    | When set to true, the options set in GUARD_LOGIN, GUARD_REGISTER and GUARD_HOME
    | will be used to redirect the user to the right page based on their state.
    | Set to false to not redirect on login
    |
    */
    'SESSION_REDIRECT_ON_REGISTER' => true,

    /*
    |--------------------------------------------------------------------------
    | Session lifetime
    |--------------------------------------------------------------------------
    |
    | Set the lifetime of the session. After this time, the session will expire and the user will have to login again.
    | You can either use '1 day' format or as an integer: 86400
    | You can also set SESSION_LIFETIME to 0 to disable session expiration.
    |
    */
    'SESSION_LIFETIME' => 60 * 60 * 24,

    /*
    |--------------------------------------------------------------------------
    | Login page route
    |--------------------------------------------------------------------------
    */
    'GUARD_LOGIN' => '/auth/login',

    /*
    |--------------------------------------------------------------------------
    | Register page route
    |--------------------------------------------------------------------------
    */
    'GUARD_REGISTER' => '/auth/register',

    /*
    |--------------------------------------------------------------------------
    | Logout route
    |--------------------------------------------------------------------------
    */
    'GUARD_LOGOUT' => '/auth/logout',

    /*
    |--------------------------------------------------------------------------
    | Home page route
    |--------------------------------------------------------------------------
    */
    'GUARD_HOME' => '/home',

    /*
    |--------------------------------------------------------------------------
    | JWT + Session
    |--------------------------------------------------------------------------
    |
    | Add an auth token to the auth session
    |
    */
    'SAVE_SESSION_JWT' => false,

    /*
    |--------------------------------------------------------------------------
    | JWT Token Secret
    |--------------------------------------------------------------------------
    |
    | Secret string to encode JWT
    |
    */
    'TOKEN_SECRET' => '@_leaf$0Secret!',

    /*
    |--------------------------------------------------------------------------
    | JWT Lifetime
    |--------------------------------------------------------------------------
    |
    | How long should JWT be valid for?
    |
    */
    'TOKEN_LIFETIME' => 60 * 60 * 24 * 365
];
