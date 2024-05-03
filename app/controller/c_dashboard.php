<?php
include_once 'app/config/main.php';
include_once 'app/model/Contact.php';

class DashboardController {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            return view ('dashboard', ['contacts' => Contact::select($_SESSION['user']['id'])]);
        }
    }
}