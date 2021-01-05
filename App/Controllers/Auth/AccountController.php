<?php

namespace App\Controllers\Auth;

class AccountController extends Controller
{
    public function user()
    {
        // View HomeController for a brief on auth guards
        $this->auth->guard("auth");

        // Get the currently logged in user
        $user = $this->auth->user("users", ["password"]);

        // Display the account screen
        render("account", [
            "user" => $user,
            // Just "playing it safe", so we loop over keys instead of
            // handpicking specific keys(which may differ from your db)
            "keys" => array_keys($user),
        ]);
    }

    public function show_update()
    {
        $this->auth->guard("auth");

        render("update", [
            "user" => $this->auth->id(),
        ]);
    }

    public function update()
    {
        $this->auth->guard("auth");

        $userId = $this->auth->id();

        // data to update
        $data = request(["username", "email"]);
        $dataKeys = array_keys($data);

        // data to find user by
        $where = ["id" => $userId];

        // params which shouldn't already exist in db
        $uniques = ["username", "email"];

        foreach ($dataKeys as $key) {
            // remove fields with null values
            if (!$data[$key]) {
                unset($data[$key]);
                continue;
            }

            // remove empty fields
            if (!strlen($data[$key])) {
                unset($data[$key]);
            }
        }

        // remove non-present uniques
        foreach ($uniques as $key => $unique) {
            if (!isset($data[$unique])) {
                unset($uniques[$key]);
            }
        }

        $user = $this->auth->update("users", $data, $where, $uniques);

        if (!$user) {
            return render("update", [
                "errors" => $this->auth->errors(),
                "username" => $user["username"] ?? null,
                "email" => $user["email"] ?? null,
            ]);
        }

        response()->redirect("/user");
    }
}
