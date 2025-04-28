<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BlogController;
use App\Controllers\AuthController;

// Routage minimaliste
$request = $_GET['route'] ?? 'home';

switch ($request) {
    case 'login':
        (new AuthController())->login();
        break;
    case 'logout':
        (new AuthController())->logout();
        break;
    case 'post':
        (new BlogController())->show($_GET['id'] ?? null);
        break;
    case 'admin':
        (new BlogController())->admin();
        break;
    default:
        (new BlogController())->index();
        break;
}
