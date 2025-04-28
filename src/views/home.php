<?php ob_start(); ?>
<?php foreach ($posts as $post): ?>
    <article>
        <h2><a href="?route=post&id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
        <time><?= $post['created_at'] ?></time>
    </article>
<?php endforeach; ?>
<?php $content = ob_get_clean();
require 'layout.php'; ?>