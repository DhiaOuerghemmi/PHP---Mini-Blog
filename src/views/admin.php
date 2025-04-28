<?php ob_start(); ?>
<h2>Administration des articles</h2>
<form method="post">
    <input name="title" placeholder="Titre" required>
    <textarea name="content" placeholder="Contenu" required></textarea>
    <button>Créer</button>
</form>
<hr>
<?php foreach ($posts as $p): ?>
    <div>
        <strong><?= htmlspecialchars($p['title']) ?></strong>
        <form method="post" action="?route=admin" style="display:inline;">
            <input type="hidden" name="delete_id" value="<?= $p['id'] ?>">
            <button type="submit">Supprimer</button>
        </form>
    </div>
<?php endforeach; ?>
<?php $content = ob_get_clean();
require 'layout.php'; ?>