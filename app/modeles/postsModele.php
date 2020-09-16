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



// PAS FINI !!!!!!!
function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM posts p
          JOIN users u ON p.user = u.id
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
