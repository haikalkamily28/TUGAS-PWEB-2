<?php
include_once 'app/models/user.php';
include_once 'app/config/static.php';

class AuthController {
    // Method to display the login page
    static function login() {
        view('auth/layout', ['url' => 'login']);
    }

    // Method to handle login form submission
    static function sessionLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'email' => $post['username'],  // Assuming the username is the email
            'password' => $post['password']
        ]);

        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        } else {
            header('Location: '.BASEURL.'login?failed=true');
        }
    }

    // Method to handle logout
    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL. 'login');
    }
}
