<?php 

namespace App\Controllers\BooksController;

use \PDO;

function indexAction(PDO $connexion){

    // Je vais demander des données aux modèles 

    //BOOKS
    include_once '../app/models/booksModel.php';
    $books = \App\Models\BooksModel\findAll($connexion);

    // Je charge la vue 'home' dans $content 
    global $content;
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}