<?php
namespace App\Controllers;

class PagesController extends Controller {
    public function index() {
        $this->render("pages/index");
    }
}