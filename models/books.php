<?php
function getBooks ()
{
  $file = file_get_contents('json/books.json');
  $books = json_decode($file, true);

  return $books;
}
