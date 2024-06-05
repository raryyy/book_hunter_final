<?php
// ROUTER PRINCIPAL

// ROUTE DES BOOKS 
// PATERN: /?photos
// CTRL: photosController
// ACTION: indexAction
if(isset($_GET['books'])) :
    include_once '../app/controllers/booksController.php';
    \App\Controllers\BooksController\indexAction($connexion);
// ROUTE DES AUTHORS
// PATERN: /?authors
// CTRL: authorsController
// ACTION: indexAction

// elseif(isset($_GET['authors'])) :
//     include_once '../app/controllers/authorsController.php';
//     \App\Controllers\AuthorsController\indexAction($connexion);

// ROUTE PAR DEFAUT
// PATERN
// CTRL pagesController
//ACTION homeAction
else: 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;