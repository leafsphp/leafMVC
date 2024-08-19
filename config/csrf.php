
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
*/

return [
    'SECRET_KEY' => '_token',
    'SECRET' => getenv('APP_KEY'),
    'METHODS' => ['POST', 'PUT', 'PATCH', 'DELETE'],
    'EXCEPT' => [
        '/api/{wild}',
        '/hook/{wild}'
    ]
];
