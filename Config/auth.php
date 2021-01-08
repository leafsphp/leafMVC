<?php

use Leaf\Helpers\Password;

return [
    // automatically add created_at/updated_at timestamps?
    "USE_TIMESTAMPS" => true,
    // Password encode is run when leaf wants to encode passwords on register
    // This exact method is used by default in Leaf, so you can delete it if
    // you want to.
    "PASSWORD_ENCODE" => function ($password) {
        return Password::hash($password);
    },
    // this function is run to verify the password. It's done by default,
    // so you can remove/set this and the above lines null if you wish to.
    "PASSWORD_VERIFY" => function ($password, $hashedPassword) {
        // Inside the password_verify method, you have access to the password and the hashed password
        return Password::verify($password, $hashedPassword);
    },
    // the default password key
    "PASSWORD_KEY" => "password",
    // Hide id field from user object?
    "HIDE_ID" => true,
    // Hide password field from user object?
    "HIDE_PASSWORD" => true,
    // Login params error
    "LOGIN_PARAMS_ERROR" => "Username not registered!",
    // Login password error
    "LOGIN_PASSWORD_ERROR" => "Password is incorrect!",
    // USE_SESSION is experimental!!!
    // If you encounter any problems using any new auth session features,
    // revert to the default auth and manage sessions manually.
    // Don't forget to open an issue.
    "USE_SESSION" => false,
    // Create a session on registration?
    "SESSION_ON_REGISTER" => false,
    // Login page
    "GUARD_LOGIN" => "/auth/login",
    // Register page
    "GUARD_REGISTER" => "/auth/register",
    // Logout route
    "GUARD_LOGOUT" => "/auth/logout",
    // Home page
    "GUARD_HOME" => "/home",
    // Add an auth token to the auth session?
    "SAVE_SESSION_JWT" => false,
];
