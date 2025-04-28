<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mini-Blog</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <h1><a href="/">Mini-Blog</a></h1>
        <nav>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="?route=admin">Admin</a>
                <a href="?route=logout">Se déconnecter</a>
            <?php else: ?>
                <a href="?route=login">Se connecter</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <?= $content ?>
    </main>
    <script src="/js/app.js"></script>
</body>

</html>