<?php ob_start(); ?>
<article>
    <h2><?= htmlspecialchars($post['title']) ?></h2>
    <time><?= $post['created_at'] ?></time>
    <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
</article>
<?php $content = ob_get_clean();
require 'layout.php'; ?>