<?php

/*
|--------------------------------------------------------------------------
| CSRF Configuration
|--------------------------------------------------------------------------
|
| This file contains the configuration for CSRF protection.
| CSRF protection is important in preventing
| Cross Site Request Forgery attacks.
|
|
| EXCEPT: An array of routes to exclude from CSRF protection
|    the csrf exempted routes routes can be defined
|    explicitly i.e 'sample/route'
|    or with expressions i.e 'route/{int|slug|any|all}' 
|
| @expression {int}    - Integer values
| @expression {slug}   - Alphanumerical values
| @expression {any}    - Every character except slashes (/)
| @expression {wild}   - Every character including slashes
|
*/

return [
    'SECRET_KEY' => '_token',
    'SECRET' => getenv('APP_KEY'),
    'METHODS' => ['POST', 'PUT', 'PATCH', 'DELETE'],
    'EXCEPT' => [
        // ... route list
    ]
];
