<?php

if ($_SERVER['REQUEST_URI'] === '/login') {
    AuthController::login();
}

if ($_SERVER['REQUEST_URI'] === '/session-login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthController::sessionLogin();
}

if ($_SERVER['REQUEST_URI'] === '/logout') {
    AuthController::logout();
}

