<?php
require('models/books.php');

function listBooks()
{

  $books = getBooks();
    echo '<pre>';
    var_dump($books);
    echo '<pre>';
    die;

  require('views/books.php');
}

function showBook ($id)
{
  $book = getBook($id);

  require('views/book.php');
}
