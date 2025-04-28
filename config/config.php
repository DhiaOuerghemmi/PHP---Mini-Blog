<?php
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

// Charger les variables d’environnement
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Configuration PDO SQLite
return [
    'db_dsn'  => $_ENV['DB_DSN']    ?? 'sqlite:' . __DIR__ . '/../storage/data.sqlite',
    'db_user' => $_ENV['DB_USER']   ?? null,
    'db_pass' => $_ENV['DB_PASS']   ?? null,
];
