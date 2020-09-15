<?php
/*

      .app/modeles/postsModele.php

*/

namespace App\Modeles\Post;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM posts
          LIMIT 4;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
