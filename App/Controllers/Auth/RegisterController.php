<?php

namespace App\Controllers\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        $this->auth->guard("guest");

        render("register");
    }
    
    public function store()
    {
        $this->auth->guard("guest");

        // $username = requestData("username");
        // $email = requestData("email");
        // $password = requestData("password");

        // You can also directly pick vars from the request object
        $credentials = requestData(["username", "email", "password"]);

        // You can validate your data with Leaf Form Validation
        $this->form->validate([
            "username" => "validUsername",
            "email" => "email",
            "password" => "required"
        ]);

        // new in v2.5. You can initiate a session immedietely on signup
        $this->auth->config("SESSION_ON_REGISTER", true);

        // Direct registration with Leaf Auth. Registers and initiates a
        // login, so you don't have to call login again, unless you want to.
        $user = $this->auth->register("users", $credentials, [
            // This array makes sure that the same username
            // and email can't be registered multiple times
            "username", "email"
        ]);

        if (!$user) {
            return render("register", array_merge([
                "errors" => array_merge($this->auth->errors(), $this->form->errors()),
            ], request(["username", "email", "password"])));
        }
    }
}
