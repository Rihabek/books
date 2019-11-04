<?php
function getBooks ()
{
  $file = file_get_contents('json/books.json');
  $books = json_decode($file, true);

  return $books;
}
function getBook($id)
{
  $file = file_get_contents('json/books.json');
  $books = json_decode($file, true);
    $result =null;
   foreach ($books as $book) {
     if ($book['id'] === $id){
       $result = $book;
     }
   }

   return $result;
}

?>
