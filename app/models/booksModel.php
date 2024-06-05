<?php 
namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *, b.id AS BooksID, a.id AS authorID
    FROM books b
    INNER JOIN authors a ON b.author_id = a.id
    ORDER BY b.created_at DESC
    LIMIT 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}