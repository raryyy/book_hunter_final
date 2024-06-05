<?php
use App\Controllers\BooksController;

include '../app/controllers/booksController.php';

switch ($_GET['books']):
    case 'show':

        booksController\showAction($connexion, $_GET['id']);

        break;
    default:

        booksController\indexAction($connexion);

        break;
endswitch;