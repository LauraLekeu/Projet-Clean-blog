<?php
/*

      .app/controleurs/postsControleur.php

*/

namespace App\Controleurs\Posts;
use \App\Modeles\Post;

function indexAction(\PDO $connexion) {
  // Demander la liste des posts au modèle
  include_once '../app/modeles/postsModele.php';
  $posts = Post\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_POST_INDEX;
  ob_start();
  include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}
