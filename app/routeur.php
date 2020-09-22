<?php
/*

      .app/routeur.php

*/

// PAGE ABOUT
// PATTERN: about
// CTRL: -
// ACTION: -

if (isset($_GET['contact'])):
  $title = TITRE_CONTACT;
  ob_start(); // pas besoin de mettre global car on est dans le routeur, au même niveau que les parametres
  include_once '../app/vues/template/partials/_contact.php';
  $content = ob_get_clean();

// PAGE ABOUT
// PATTERN: about
// CTRL: -
// ACTION: -

elseif (isset($_GET['about'])):
  $title = TITRE_ABOUT;
  ob_start(); // pas besoin de mettre global car on est dans le routeur, au même niveau que les parametres
  include_once '../app/vues/template/partials/_about.php';
  $content = ob_get_clean();


// ROUTE DU DETAIL D'UN POST
// PATTERN: /posts/id-slug.html
// CTRL: postsControleur
// ACTION: showAction

elseif (isset($_GET['postId'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postId']);


// ROUTE PAR DEFAUT
// PATTERN: posts
// CTRL: postsControleur
// ACTION: indexAction
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);


endif;
