<?php

// Auth
Router::url('login', 'get', 'c_auth::login');
// Router::url('login', 'post', 'c_auth::sessionLogin');
Router::url('register', 'get', 'c_auth::register');
// Router::url('register', 'post', 'c_auth::newRegister');
Router::url('logout', 'get', 'c_auth::logout');


// Dashboard
Router::url('dashboard', 'get', 'c_dashboard::dashboard');



Router::url('/', 'get', function () {
    header('Location: login');
});