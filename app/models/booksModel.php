<?php 
namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array {
    $sql = "SELECT *, b.id AS BooksID, a.id AS authorID
    FROM books b
    INNER JOIN authors a ON b.author_id = a.id
    ORDER BY b.created_at DESC
    LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit,PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}