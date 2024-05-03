<?php
include_once __DIR__ . '/Database.php';

class User
{
    static function login($data = [])
    {
        global $conn;
    
        $username = $data['username'];
        $password = $data['password'];
    
        $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['password'];
            $verify = password_verify($password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        }
    }
    
    static function register($data = [])
    {
        global $conn;

        $username = $data['username'];
        $password = $data['password'];
        $full_name = $data['nama_lengkap'];
        $email = $data['email'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users SET nama_lengkap = ?, username = ?, password = ?, email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $full_name, $username, $hashedPassword, $email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($username)
    {
        global $conn;
        $sql = "SELECT password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}