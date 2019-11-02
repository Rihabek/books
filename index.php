<?php
$action = isset($_GET['action']) ? (string) $_GET['action'] : 'books';

switch ($action) {
  case 'books':
    require('controllers/books.php');
    listBooks();
    break;
  default:
    require('views/404.php');
}
