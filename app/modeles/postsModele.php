<?php
/*

      .app/modeles/postsModele.php

*/
namespace App\Modeles\Post;

function findAll(\PDO $connexion, int $limit = 4, int $offset = 0) {
  $sql = "SELECT *
          FROM posts
          ORDER BY datePublication DESC
          LIMIT :limit
          OFFSET :offset;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
  $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT p.id,
                 p.titre,
                 p.sousTitre,
                 p.texte,
                 p.datePublication,
                 u.nom,
                 u.prenom
          FROM posts p
          JOIN users u ON p.user = u.id
          WHERE p.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

// CREE NV FONCTION POUR UPDATE
function updateField(\PDO $connexion, int $id, string $field, string $value) { // Je récupère les données du controleur que j'utilise dans ma requête
  $sql = "UPDATE posts
          SET `$field` = :value
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->bindValue(':value', $value, \PDO::PARAM_STR);
  return intval($rs->execute()); // Si tout se passe bien je renvois 0 ou 1 au controleur
      // OU ($rs->execute())?1:0;

 }
