<?php

namespace App\Helpers;

class Auth
{
    public static function attempt(string $user, string $pass): bool
    {
        // À remplacer par vérification DB ou config
        if ($user === 'admin' && $pass === 'password') {
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }

    public static function check(): bool
    {
        return isset($_SESSION['user']);
    }

    public static function logout(): void
    {
        unset($_SESSION['user']);
        session_destroy();
    }
}
