<?php
/*

      .app/routeur.php

*/

// ROUTE PAR DEFAUT
// PATTERN: /posts
// CTRL: postsControleur
// ACTION: indexAction
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
