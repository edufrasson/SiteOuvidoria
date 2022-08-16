<?php
    class HomeController extends Controller {

        public static function ViewHome() {
            parent::isAuthenticated();
            parent::render("Home/Home");
        } 
        
    }