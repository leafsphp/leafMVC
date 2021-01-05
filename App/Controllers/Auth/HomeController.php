<?php

namespace App\Controllers\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // This is the simple session guard that ships with Leaf v2.5
        // In this case, it makes sure that the user is signed in.
        $this->auth->guard("auth");

        // NB: Guards can also be placed in the constructor of a class
        // to affect all the methods in that class

        render("home");
    }
}
