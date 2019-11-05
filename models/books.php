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
  $db = dbConnect();
  $stmt = $db-> prepare('SELECT
    books.*,
    authors.name AS author
    FROM books
    LEFT JOIN authors
    ON books.author_id = authors.id
    WHERE books.id =:id
  ');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  $stmt ->execute();
  return $stmt ->fetch();

};


?>
