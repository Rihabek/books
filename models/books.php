<?php
require_once('utils/db.php');


function getBooks ()
{
  $db = dbConnect();
  $stmt = $db-> prepare('SELECT
    books.*,
    authors.name AS author
    FROM books
    LEFT JOIN authors
    ON books.author_id = authors.id
  ');

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
