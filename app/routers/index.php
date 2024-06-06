<?php
// ROUTER PRINCIPAL
// ROUTE DES AUTHORS
// PATERN: /?authors
if(isset($_GET['authors'])) :
    include_once '../app/routers/authors.php';

// ROUTE DES BOOKS 
// PATERN: /?photos
elseif(isset($_GET['books'])) :
    include_once '../app/routers/books.php';

else: 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;