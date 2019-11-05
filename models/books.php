<?php
require_once('utils/db.php');

$limit = 20;

function countBooks()
{
  $db = dbConnect();
  $stmt = $db->prepare('SELECT COUNT(*) FROM books');
  $stmt->execute();
  return $stmt->fetchColumn();

}

function getBooks ()
{

  $page = $_GET['page'];
  $count = countBooks();
  die($count);


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
