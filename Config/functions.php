<?php

if (!function_exists('_env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function _env($key, $default = null)
    {
        $item = getenv($key);

        if (!isset($_ENV[$key]) || (isset($_ENV[$key]) && $_ENV[$key] == null)) {
            $item = $default;
        }

        return $item;
    }
}

if (!function_exists('app')) {
    /**
     * Return the Leaf instance
     *
     * @return Leaf\App
     */
    function app()
    {
        $app = Leaf\Config::get("app")["instance"] ?? null;

        if (!$app) {
            $app = new Leaf\App;
            Leaf\Config::set("app", ["instance" => $app]);
        }

        return $app;
    }
}

if (!function_exists('auth')) {
    /**
     * Return Leaf's auth object
     */
    function auth($guard = null)
    {
        if (!$guard) return \Leaf\Auth::class;

        if ($guard === 'session') {
            return \Leaf\Auth::session();
        }

        return \Leaf\Auth::guard($guard);
    }
}

if (!function_exists('d')) {
    /**
     * Return Leaf's date object
     */
    function d()
    {
        return app()->date;
    }
}

if (!function_exists('dbRow')) {
    /**
     * Return a db row by it's id
     *
     * @param string $table The table to find row
     * @param string|int $row_id The row's id
     * @param string $columns The columns to get
     *
     * @return array|null The database field
     */
    function dbRow($table, $row_id, $columns = "*")
    {
        app()->db()->autoConnect();
        return app()->db()->select($table, $columns)->where("id", $row_id)->fetchAll();
    }
}

if (!function_exists('email')) {
    /**
     * Write and send an email
     *
     * @param array $email The email block to write and send
     */
    function email(array $email)
    {
        $mail = new \Leaf\Mail;
        if (getenv("MAIL_DRIVER") === "smtp") {
            $mail->smtp_connect(
                getenv("MAIL_HOST"),
                getenv("MAIL_PORT"),
                !getenv("MAIL_USERNAME") ? false : true,
                getenv("MAIL_USERNAME") ?? null,
                getenv("MAIL_PASSWORD") ?? null,
                getenv("MAIL_ENCRYPTION") ?? "STARTTLS"
            );
        }
        $mail->write($email)->send();
    }
}

if (!function_exists('fs')) {
    /**
     * Return Leaf's FS object
     */
    function fs()
    {
        return app()->fs;
    }
}

if (!function_exists('flash')) {
    /**
     * Return Leaf's flash object
     */
    function flash()
    {
        return \Leaf\Flash::class;
    }
}

if (!function_exists('hasAuth')) {
    /**
     * Find out if there's an active sesion
     */
    function hasAuth()
    {
        return !!sessionUser();
    }
}

if (!function_exists('request')) {
    /**
     * Return request or request data
     *
     * @param array|string $data — Get data from request
     */
    function request($data = null)
    {
        if ($data) return app()->request()->get($data);
        return app()->request();
    }
}

if (!function_exists('response')) {
    /**
     * Return response or set response data
     *
     * @param array|string $data — The JSON response to set
     */
    function response($data = null)
    {
        if ($data) return app()->response()->json($data);
        return app()->response();
    }
}

if (!function_exists('Route')) {
    /**
     * @param string The request method(s)
     * @param string The route to handle
     * @param callable|string The handler for the route
     */
    function Route($methods, $pattern, $fn)
    {
        app()->match($methods, $pattern, $fn);
    }
}

if (!function_exists('session')) {
    /**
     * Get a session variable or the session object
     *
     * @param string|null $key The variable to get
     */
    function session($key = null)
    {
        if ($key) {
            return \Leaf\Http\Session::get($key);
        }

        return (new \Leaf\Http\Session);
    }
}

if (!function_exists('sessionUser')) {
    /**
     * Get the currently logged in user
     */
    function sessionUser()
    {
        return session('AUTH_USER');
    }
}

if (!function_exists('setHeader')) {
    /**
     * Set a response header
     *
     * @param string|array $key The header key
     * @param string $value Header value
     * @param bool $replace Replace header if exists
     * @param mixed|null $code Status code
     */
    function setHeader($key, $value = "", $replace = true, $code = 200)
    {
        app()->headers()->set($key, $value, $replace, $code);
    }
}

if (!function_exists("view")) {
    function view(string $view, array $data = [])
    {
        if (ViewConfig("render")) {
            ViewConfig("config")([
                "views_path" => AppConfig("views.path"),
                "cache_path" => AppConfig("views.cachePath"),
            ]);

            return ViewConfig("render")($view, $data);
        }

        $engine = ViewConfig("view_engine");

        $className = strtolower(get_class(new $engine));

        $fullName = explode("\\", $className);
        $className = $fullName[count($fullName) - 1];

        if (forward_static_call_array(["Leaf\\View", $className], [])) {
            forward_static_call_array(["Leaf\\View", $className], [])->configure(AppConfig("views.path"), AppConfig("views.cachePath"));
            return forward_static_call_array(["Leaf\\View", $className], [])->render($view, $data);
        }

        $engine = new $engine($engine);
        $engine->config(AppConfig("views.path"), AppConfig("views.cachePath"));

        return $engine->render($view, $data);
    }
}
