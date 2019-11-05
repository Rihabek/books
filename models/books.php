<?php
require_once('utils/db.php');

function getBooks ()
{
  $db = dbConnect();

  $stmt = $db ->prepare('SELECT*FROM books');

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);

  // $file = file_get_contents('json/books.json');
  // $books = json_decode($file, true);
  // return $books;
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
