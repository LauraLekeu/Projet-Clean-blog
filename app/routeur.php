<?php
/*

      .app/routeur.php

*/


// ROUTE DU DETAIL D'UN POST
// PATTERN: /posts/id-slug.html
// CTRL: postsControleur
// ACTION: showAction

if (isset($_GET['postId'])):   // METTRE QUELQUE CHOSE
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postId']);


// ROUTE PAR DEFAUT
// PATTERN: /posts
// CTRL: postsControleur
// ACTION: indexAction
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);


endif;
