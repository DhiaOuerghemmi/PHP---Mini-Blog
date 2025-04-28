<?php ob_start(); ?>
<h2>Connexion Admin</h2>
<?php if (!empty($error)): ?><p class="error"><?= $error ?></p><?php endif; ?>
<form method="post">
    <label>Utilisateur<input name="username" required></label>
    <label>Mot de passe<input type="password" name="password" required></label>
    <button>Se connecter</button>
</form>
<?php $content = ob_get_clean();
require 'layout.php'; ?>