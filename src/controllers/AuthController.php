<?php

namespace App\Controllers;

use App\Helpers\Auth;

class AuthController
{
    public function login(): void
    {
        session_start();
        $error = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (Auth::attempt($_POST['username'], $_POST['password'])) {
                header('Location: ?route=admin');
                exit;
            }
            $error = 'Identifiants invalides';
        }
        require __DIR__ . '/../Views/login.php';
    }

    public function logout(): void
    {
        session_start();
        Auth::logout();
        header('Location: /');
        exit;
    }
}
