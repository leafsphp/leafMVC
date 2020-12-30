<?php
namespace App\Controllers;

// This is our model, we import it here to use it below
use App\Models\User;
use Leaf\Helpers\Password;

/**
 * UsersController (Demo)
 * ---------------
 * This is a demo users controller put together to give
 * you an idea on basic features of leaf. Each block is commented
 * to help you understand exactly what's going on.
 * 
 * Some blocks can be used as alternatives depending on your preference,
 * you can switch to those as you see fit.
 * 
 * Although a demo, it's a real controller and works correctly as is.
 * You can continue your project like this or edit it to match your app.
 */
class UsersController extends Controller
{
    // refer to base controller to find package initialization
    // and auth settings
    public function login()
    {
        // requestData is a shortcut method which allows
        // you get data passed into a request by key name
        // $username = requestData("username");

        // From v2, you can also use request()
        // You can directly get parameters like this:
        // $password = request("password");
        // If you want to, you can perform some operation on the request object
        // $password = request()->get("password");

        // You can also mass assign particular fields from the request 
        list($username, $password) = requestData(["username", "password"], true, true);

        // You can perform operations on your model like this
        $user = User::where("username", $username)->first();

        // auth is initialised in the base controller
        // login allows us to sign a user in, and also generates
        // a jwt automatically
        $user = $this->auth->login("users", [
            "username" => $username,
            "password" => $password
        ]);

        // password encoding has been configured in the base controller

        // This line catches any errors that MAY happen
        if (!$user) throwErr($this->auth->errors());

        // json is another global shortcut method
        // it's shorter than $this->json()
        json($user);
    }

    public function register()
    {
        // $username = requestData("username");
        // $email = requestData("email");
        // $password = requestData("password");

        // You can also directly pick vars from the request object
        $credentials = requestData(["username", "email", "password"]);

        // You can validate your data with Leaf Form Validation
        $validation = $this->form->validate([
            "username" => "validUsername",
            "email" => "email",
            "password" => "required"
        ]);

        // Throws an error if there's an issue in validation
        if (!$validation) throwErr($this->form->errors());

        // Direct registration with Leaf Auth. Registers and initiates a
        // login, so you don't have to call login again, unless you want
        // to. The 3rd parameter makes sure that the same username
        // and email can't be registered multiple times
        $user = $this->auth->register("users", $credentials, [
            "username", "email"
        ]);

        // throw an auth error if there's an issue
        if (!$user) throwErr($this->auth->errors());

        json($user);
    }

    public function recover_account()
    {
        $username = request("email");

        $user = User::where("email", $username)->first() ?? null;
        if (!$user) throwErr(["email" => "Email not found"]);

        // Set a temporary random password and reset user password
        $newPassword = rand(00000000, 99999999);

        // hash new password (uses leaf password helper)
        $user->password = Password::hash($newPassword);
        $user->save();

        // Send an email to user with the new temporary password
        // email() is a global method that allows you to send a
        // quick email. Don't forget to configure your .env variables
        email([
            "subject" => "Your Password has been reset",
            "body" => "This is your new password: $newPassword",
            "recepient_email" => $user->email,
            "sender_name" => "API Name",
        ]);

        json(["message" => "ok"]);
    }

    public function reset_password()
    {
        // id retrieves the JWT from the headers, decodes it and returns
        // the user encoded into the token. If there's a problem with the token,
        // we can throw whatever error occurs. This means the user must be logged in.
        $userId = $this->auth->id() ?? throwErr($this->auth->errors());        
        $password = request("password");

        // Get the 
        $user = User::find($userId);
        if (!$user) throwErr(["user" => "User not found! Check somewhere..."]);

        // Change the user password
        $user->password = Password::hash($password);
        $user->save();

        // login again to get new token
        $user = $this->auth->login("users", ["id" => $userId]);
        if (!$user) throwErr($this->auth->errors());

        json($user);
    }

    public function user() {
        // fields to hide from user list
        $hidden = ["id", "remember_token", "password"];

        // Make sure user is logged in
        // $auth->user() is new in v2.4 of leaf
        $user = $this->auth->user("users", $hidden);

        json($user ?? throwErr($this->auth->errors()));
    }

    public function edit()
    {
        // auth->id returns the user id encoded into jwt by default
        $userId = $this->auth->id() ?? throwErr($this->auth->errors());

        // data to update
        $data = request(["username", "email", "password"]);

        // data to find user by
        $where = ["id" => $userId];

        // params which shouldn't already exist in db
        $uniques = ["username", "email"];

        $user = $this->auth->update("users", $data, $where, $uniques);

        json($user ?? throwErr($this->auth->errors()));
    }
}
