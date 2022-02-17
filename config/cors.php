<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configure allowed origins
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Allow-Origin CORS header. Possible values:
    |
    | * String - set origin to a specific origin. For example if
    |   you set it to "http://example.com" only requests from
    |   "http://example.com" will be allowed.
    |
    | * RegExp - set origin to a regular expression pattern which will be
    |   used to test the request origin. If it's a match, the request origin
    |   will be reflected. For example the pattern /example\.com$/ will reflect
    |   any request that is coming from an origin ending with "example.com".
    |
    | * Array - set origin to an array of valid origins. Each origin can be a String
    |   or a RegExp. For example ["http://example1.com", /\.example2\.com$/] will
    |   accept any request from "http://example1.com" or from
    |   a subdomain of "example2.com".
    |
    | * Function - set origin to a function implementing some custom
    |   logic. The function takes the request origin as the first parameter
    |   and a callback (called as callback(err, origin), where origin is a
    |   non-function value of the origin option) as the second.
    |
    */
    'origin' => '*',

    /*
    |--------------------------------------------------------------------------
    | Configure allowed HTTP methods
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Allow-Methods CORS header.
    | Expects a comma-delimited string (ex: 'GET,PUT,POST') or
    | an array (ex: ['GET', 'PUT', 'POST'])
    |
    */
    'methods' => 'GET,HEAD,PUT,PATCH,POST,DELETE',

    /*
    |--------------------------------------------------------------------------
    | Configure allowed HTTP headers
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Allow-Headers CORS header. Expects a
    | comma-delimited string (ex: 'Content-Type,Authorization') or
    | an array (ex: ['Content-Type', 'Authorization']). If not specified,
    | defaults to reflecting the headers specified in the request's
    | Access-Control-Request-Headers header.
    |
    */
    'allowedHeaders' => '*',

    /*
    |--------------------------------------------------------------------------
    | Configure expose headers
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Expose-Headers CORS header. Expects
    | a comma-delimited string (ex: 'Content-Range,X-Content-Range')
    | or an array (ex: ['Content-Range', 'X-Content-Range']).
    | If not specified, no custom headers are exposed.
    |
    */
    'exposedHeaders' => '',

    /*
    |--------------------------------------------------------------------------
    | Configure credentials
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Allow-Credentials CORS header.
    | Set to true to pass the header, otherwise it is omitted.
    |
    */
    'credentials' => false,

    /*
    |--------------------------------------------------------------------------
    | Configure max age
    |--------------------------------------------------------------------------
    |
    | Configures the Access-Control-Max-Age CORS header. Set to
    | an integer to pass the header, otherwise it is omitted.
    |
    */
    'maxAge' => null,

    /*
    |--------------------------------------------------------------------------
    | Configure preflight continue
    |--------------------------------------------------------------------------
    |
    | Pass the CORS preflight response to the next handler.
    |
    */
    'preflightContinue' => false,

    /*
    |--------------------------------------------------------------------------
    | Log open
    |--------------------------------------------------------------------------
    |
    | Provides a status code to use for successful OPTIONS requests,
    | since some legacy browsers (IE11, various SmartTVs) choke on 204.
    |
    */
    'optionsSuccessStatus' => 204,
];
