<?php

namespace App\Controllers;

use App\Models\Post;
use App\Helpers\Auth;
use PDO;

class BlogController
{
    private Post $postModel;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';
        $pdo = new PDO($config['db_dsn'], $config['db_user'], $config['db_pass']);
        $this->postModel = new Post($pdo);
        session_start();
    }

    public function index(): void
    {
        $posts = $this->postModel->all();
        require __DIR__ . '/../Views/home.php';
    }

    public function show(?int $id): void
    {
        if (!$id || !$post = $this->postModel->find($id)) {
            header('Location: /');
            exit;
        }
        require __DIR__ . '/../Views/post.php';
    }

    public function admin(): void
    {
        if (!Auth::check()) {
            header('Location: ?route=login');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->postModel->create($_POST['title'], $_POST['content']);
        }
        $posts = $this->postModel->all();
        require __DIR__ . '/../Views/admin.php';
    }
}
