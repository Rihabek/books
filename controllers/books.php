<?php
require('models/books.php');

function listBooks()
{
  $books = getBooks();
  
  require('views/books.php');
}
