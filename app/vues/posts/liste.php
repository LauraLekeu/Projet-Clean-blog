<?php
/*

      .app/vues/posts/liste.php

*/
?>

<!-- POSTS LIST -->
<?php foreach ($posts as $post): ?>
  <div class="post-preview">
    <a href="posts/<?php echo $post['id']; ?>-<?php echo \Noyau\Fonctions\slugify($post['titre']); ?>.html">
      <h2 class="post-title">
        <?php echo $post['titre']; ?>
      </h2>
      <h3 class="post-subtitle">
        <?php echo $post['sousTitre']; ?>
      </h3>
    </a>
    <p class="post-meta">Posted on <?php echo date_format(date_create($post['datePublication']), "F d, Y"); ?></p>
  </div>
  <hr>
<?php endforeach; ?>
