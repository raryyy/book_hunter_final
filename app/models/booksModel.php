<?php 
namespace App\Models\BooksModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 6): array {
    $sql = "SELECT *, b.id AS bookID, a.id AS authorID, c.name AS catName
    FROM books b
    INNER JOIN authors a ON b.author_id = a.id
    INNER JOIN categories c ON b.category_id = c.id
    INNER JOIN users_notations un ON un.book_id = b.id
    INNER JOIN books_has_tags bht ON bht.book_id = b.id;
    INNER JOIN tags t ON bht.tag_id = t.id
    ORDER BY b.created_at DESC
    LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit,PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id): array {
    $sql = "SELECT *, b.id AS bookID, a.id AS authorID, c.name AS catName
    FROM books b
    INNER JOIN authors a ON b.author_id = a.id
    INNER JOIN categories c ON b.category_id = c.id
    INNER JOIN users_notations un ON un.book_id = b.id
    INNER JOIN books_has_tags bht ON bht.book_id = b.id;
    INNER JOIN tags t ON bht.tag_id = t.id
    WHERE b.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id,PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}