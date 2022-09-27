<?php
namespace App\Controller;

class HomeController extends Controller
{

    public static function ViewHome()
    {
        parent::isAuthenticated();
        parent::render("Home/Home");
    }
}
