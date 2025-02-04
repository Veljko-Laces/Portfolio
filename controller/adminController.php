<?php

require_once __DIR__ . '/../manager/adminManager.php';

class AdminController {

    public function login($email, $password) {
        session_start();
    
        $adminManager = new AdminManager();
        $user = $adminManager->selectEmail($email);
    
        if (!$user || !password_verify($password, $user[0]['password'])) {
            $_SESSION["error_message"] = "Email ou mot de passe incorrect";
            $_SESSION["user_logged_in"] = false;
            header("Location: /portfolio/admin/login.php");
            exit;
        }
    
        $_SESSION["user_logged_in"] = true;
        header("Location: /portfolio/admin/index.php");
        exit;
    }

    public function logout() {
        session_start();
        session_destroy();
        $_SESSION["user_logged_in"] = false;
        header("Location: /portfolio/admin/login.php");
        exit;
    }
}
?>
