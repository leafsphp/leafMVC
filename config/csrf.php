<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Secret
    |--------------------------------------------------------------------------
    |
    | This is the secret key used to generate the CSRF token. It is
    | combined with a random string to generate the token.
    |
    */
    'secret' => _env('APP_KEY', '@nkor_leaf$0Secret!!'),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This is the key under which the token will be stored in the
    | session. It can also be used to retrieve the token from the
    | request headers.
    |
    */
    'secretKey' => 'X-Leaf-CSRF-Token',

    /*
    |--------------------------------------------------------------------------
    | Route Exceptions
    |--------------------------------------------------------------------------
    |
    | This is a list of routes that will be excluded from CSRF
    | verification. This is useful for APIs that need to bypass
    | the CSRF verification. You can add route URIs or directly pass
    | in dynamic routes like '/items/{id}' or '/items/(\d+)'.
    |
    */
    'except' => [],

    /*
    |--------------------------------------------------------------------------
    | Configure allowed HTTP methods
    |--------------------------------------------------------------------------
    |
    | This is a list of HTTP methods that are the CSRF module will
    | be active on. All other methods will be ignored.
    |
    */
    'methods' => ['POST', 'PUT', 'PATCH', 'DELETE'],

    /*
    |--------------------------------------------------------------------------
    | Configure missing token message
    |--------------------------------------------------------------------------
    |
    | This is the message that will be returned when the CSRF token
    | is not found in the request.
    |
    */
    'messages.tokenNotFound' => 'Token not found.',

    /*
    |--------------------------------------------------------------------------
    | Configure invalid token message
    |--------------------------------------------------------------------------
    |
    | This is the message that will be returned when the CSRF token
    | is invalid.
    |
    */
    'messages.tokenInvalid' => 'Invalid token.',

    /*
    |--------------------------------------------------------------------------
    | Configure error handler
    |--------------------------------------------------------------------------
    |
    | By default, the CSRF module will return a built-in error page,
    | however, you can configure a custom error handler to handle
    | your own error pages.
    |
    | onError: function() {
    |     // Your custom error handler
    | }
    |
    */
    'onError' => null,
];
