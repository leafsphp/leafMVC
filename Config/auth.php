<?php

use Leaf\Helpers\Password;

return [
    "login" => "/auth/login",
    "register" => "/auth/register",
    "authenticated" => "/home",
    "logout" => "/auth/logout",
    "settings" => [
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
        "PASSWORD_KEY" => "password",
        "HIDE_ID" => true,
        "HIDE_PASSWORD" => true,
        "LOGIN_PARAMS_ERROR" => "Username not registered!",
        "LOGIN_PASSWORD_ERROR" => "Password is incorrect!",
        // USE_SESSION is experimental and may cause problems for your whole
        // authentication. If this happens, revert to the default auth and
        // manage sessions manually.
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
        "SAVE_SESSION_JWT" => false,
    ],
];
