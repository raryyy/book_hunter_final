<?php 
namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array {
    $sql = "SELECT *
    FROM authors
    ORDER BY created_at DESC
    LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit , PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}