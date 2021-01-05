<?php

namespace App\Controllers\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function show()
    {
        // guest guard makes sure you can't access a screen
        // once you've been authenticated.
        $this->auth->guard("guest");

        render("login");
    }

    // refer to base controller to find package initialization
    // and auth settings
    public function store()
    {
        $this->auth->guard("guest");

        // requestData is a shortcut method which allows
        // you get data passed into a request by key name
        // $username = requestData("username");

        // From v2.1, you can also use request()
        // You can directly get parameters like this:
        // $password = request("password");

        // If you want to, you can perform some operation on the request object
        // $password = request()->get("password");

        // You can also mass assign particular fields from the request 
        list($username, $password) = requestData(["username", "password"], true, true);

        // You can perform operations on your model like this
        $user = User::where("username", $username)->first();

        // We can add validation rules
        $this->form->validate([
            "username" => "validUsername",
        ]);

        // auth is initialised in the base controller
        // login allows us to sign a user in, and also generates
        // a jwt automatically
        $user = $this->auth->login("users", [
            "username" => $username,
            "password" => $password
        ]);

        // If we can't retrieve the user for whatever reason, we can pass the
        // associated error messages into the template to be displayed. 
        if (!$user) {
            return render("login", [
                "errors" => array_merge(
                    $this->auth->errors(),
                    $this->form->errors()
                ),
                "username" => $username,
                "password" => $password,
            ]);
        }
    }

    public function logout()
    {
        // if you're not logged in, you shouldn't
        // be able to log out 
        $this->auth->guard("auth");
        
        // New in v2.5: Ends the currently active session and redirects
        // to a defined guard page/route if guard isn't found
        $this->auth->endSession("GUARD_LOGIN");
    }
}

