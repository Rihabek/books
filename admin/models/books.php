<?php
require_once('../utils/db.php');

$limit = 20;

/**
 * @param int $page
 * @param string $orderBy
 * @param string $query (optional)
 * @return array[]
 */
function getBooks(int $page = 1, string $orderBy, ?string $query): array
{
  global $limit;

  $db = dbConnect();

  $request = 'SELECT
    books.id,
    books.title,
    books.image,
    authors.name as author
    FROM books
    LEFT JOIN authors
    ON books.author_id = authors.id
  ';

  $params = array();

  if ($query) {
    $request .= ' WHERE books.title LIKE :query';
    $params[':query'] = '%' . $query . '%';
  }

  $offset = ($page - 1) * $limit;

  $stmt = $db->prepare($request . ' ORDER BY ' . $orderBy . ' LIMIT ' . $offset . ', ' . $limit);

  if (!empty($params)) {
    foreach ($params as $key => $value) {
      $stmt->bindParam($key, $value);
    }
  }

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param string $query (optional)
 * @return int
 */
function countBooks(?string $query): int
{
  $db = dbConnect();

  $request = 'SELECT COUNT(*) FROM books';

  $params = array();

  if ($query) {
    $request .= ' WHERE title LIKE :query';
    $params[':query'] = '%' . $query . '%';
  }

  $stmt = $db->prepare($request);

  if (!empty($params)) {
    foreach ($params as $key => $value) {
      $stmt->bindParam($key, $value);
    }
  }

  $stmt->execute();

  return $stmt->fetchColumn();
}

/**
 * @param int $id Book id
 * @throws Exception
 * @return array
 */
function getBook(int $id): array
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM books WHERE id = :id');

  $stmt->bindParam(':id', $id);

  $stmt->execute();

  return $stmt->fetch();
}

/**
 * @param array $data
 * @return int
 */
function addBook(array $data): int
{
    $db = dbConnect();

    $stmt = $db->prepare('INSERT INTO books (title) VALUES (:title)');

    $stmt->bindParam(':title', $data['title'], PDO::PARAM_STR);

    $stmt->execute();

    $id = $db->lastInsertId();

    setBook($id, $data);

    return $id;
}

/**
 * @param int $id Book id
 * @param array $data
 * @return int
 */
function setBook(int $id, array $data): int
{
    $db = dbConnect();

    $stmt = $db->prepare('UPDATE
      books SET
      title = :title
      ' . (isset($data['description']) ? ', description = :description' : null) . '
      ' . (isset($data['image']) ? ', image = :image' : null) . '
      ' . (isset($data['year']) ? ', year = :year' : null) . '
      ' . (isset($data['pages']) ? ', pages = :pages' : null) . '
      ' . (isset($data['wikipedia_link']) ? ', wikipedia_link = :wikipedia_link' : null) . '
      ' . (isset($data['author_id']) ? ', author_id = :author_id' : null) . '
      ' . (isset($data['country_id']) ? ', country_id = :country_id' : null) . '
      ' . (isset($data['language_id']) ? ', language_id = :language_id' : null) . '
      ' . (isset($data['categories_id']) ? ', categories_id = :categories_id' : null) . '
      WHERE id = :id
    ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->bindParam(':title', $data['title'], PDO::PARAM_STR);

    if (isset($data['description'])) {
      $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
    }

    if (isset($data['image'])) {
      $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
    }

    if (isset($data['author_id'])) {
      $stmt->bindParam(':author_id', $data['author_id'], PDO::PARAM_INT);
    }

    if (isset($data['country_id'])) {
      $stmt->bindParam(':country_id', $data['country_id'], PDO::PARAM_INT);
    }

    if (isset($data['language_id'])) {
      $stmt->bindParam(':language_id', $data['language_id'], PDO::PARAM_INT);
    }

    if (isset($data['year'])) {
      $stmt->bindParam(':year', $data['year'], PDO::PARAM_INT);
    }

    if (isset($data['pages'])) {
      $stmt->bindParam(':pages', $data['pages'], PDO::PARAM_INT);
    }

    if (isset($data['wikipedia_link'])) {
      $stmt->bindParam(':wikipedia_link', $data['wikipedia_link'], PDO::PARAM_STR);
    }

    if (isset($data['categories_id'])) {
      $stmt->bindParam(':categories_id', $data['categories_id'], PDO::PARAM_INT);
    }

    return $stmt->execute();
}

/**
 * @param int $id Book id
 * @return array
 */
function deleteBook(int $id): int
{
  $db = dbConnect();

  $stmt = $db->prepare('DELETE FROM books WHERE id = :id');

  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->rowCount();
}
