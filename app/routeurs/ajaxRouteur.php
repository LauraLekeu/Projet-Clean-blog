<?php
/*

      .app/routeurs/ajaxRouteur.php
      ROUTEUR DES TRANSACTIONS AJAX

*/


switch ($_GET['ajax']): // Si ajax existe :

  // UPDATE D'UN CHAMP 'FIELD' DU POST 'ID'
  // PATTERN: /?updateField
  // CTRL: postsControleur
  // ACTION: AjaxUpdateFieldAction
  case 'updateField':
      include_once '../app/controleurs/postsControleur.php';
      App\Controleurs\Posts\AjaxUpdateFieldAction($connexion, $_GET['id'], $_GET['field'], $_GET['value']); // J'ai accès aux donnés du updateField dans show.js et je les envois à la fonction AjaxUpdateFieldAction
      break;

  // ROUTE CHARGEMENT POSTS SUIVANTS
  // PATTERN: /?older-posts
  // CTRL: postsControleur
  // ACTION: olderAction
  case 'older-posts':
      include_once '../app/controleurs/postsControleur.php';
      App\Controleurs\Posts\AjaxOlderAction($connexion, $_GET['offset']);
      break;

endswitch;
