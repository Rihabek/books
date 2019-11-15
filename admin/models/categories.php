<?php
require_once('../utils/db.php');

function getCategories() {

  $db = dbConnect();
  $stmt = $db->prepare('SELECT * FROM categories WHERE active = 1');
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getCategory(int $id): array
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM categories WHERE id = :id');

  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->fetch();
}


function addCategory(array $data): int
{
    $db = dbConnect();

    $stmt = $db->prepare('INSERT INTO categories (name) VALUES (:name)');

    $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);

    $stmt->execute();

    return $db->lastInsertId();
}

function setCategory(int $id, array $data): int
{
    $db = dbConnect();

    $stmt = $db->prepare('UPDATE categories SET name = :name WHERE id = :id');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);

    return $stmt->execute();
}

function hideCategory(int $id): int
{
  $db = dbConnect();

  $stmt = $db->prepare('UPDATE categories SET active = 0 WHERE id = :id');

  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->rowCount();
}
?>
