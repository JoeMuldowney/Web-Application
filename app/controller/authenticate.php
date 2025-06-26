<?php
session_start();
require_once __DIR__ . '/../model/user_db.php';
require_once __DIR__ . '/../model/user.php';

class AuthController
{
    // Show login form
    public function showLogin(): void
    {
        include __DIR__ . '/../view/login.php';
    }
        public function showLogout(): void
    {
        include __DIR__ . '/../view/logout.php';
    }

    // Handle POST /login/submit
    public function login(): void
    {
        $username = trim($_POST['username']     ?? '');
        $password = $_POST['password']      ?? '';

        $userRow = (new UserDB)->findByName($username);

       
        if ($userRow && password_verify($password, $userRow['pword'])) {
            // success
            $_SESSION['user_id'] = $userRow['id'];
            $_SESSION['username'] = $userRow['uname'];
            header("Location: /portal");
            exit;
        }

        $_SESSION['error'] = 'Invalid credentials';
        header("Location: /errs");
    }
        // Protected page
    public function portal(): void
    {
       
        if (empty($_SESSION['user_id'])) {
            header("Location: /login");
            exit;
        }
        
        include __DIR__ . '/../view/admin.php';
    }
    
        // Protected page
    public function showErrs(): void
    {       
        if (empty($_SESSION['error'])) {
            header("Location: /login");
            exit;
        }
        include __DIR__ . '/../view/error.php';
    }   

        // Handle POST /login/submit
    public function logout(): void
    {   
        $_SESSION = [];
        session_destroy();
        header("Location: /redirect");
        exit;

    }       
}