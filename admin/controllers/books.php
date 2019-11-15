<?php

require('models/authors.php');
require('models/books.php');
require('models/countries.php');
require('models/languages.php');
require('models/categories.php');
$breadcrumb = array(array(
  'name' => "Livres",
  'link' => './'
));

/**
 * @param int $page
 * @param string $sort
 * @param string (optional) $query
 */
function listBooks(int $page = 1, string $sort, ?string $query): void
{
  global $breadcrumb;
  global $limit;
  $sortValues = array(
    array('value' => 'title', 'name' => "Titre"),
    array('value' => 'author', 'name' => "Auteur"),
    array('value' => 'year', 'name' => "Date de parution"),
  );
  $breadcrumb[0]['active'] = true;
  $pages = (int) ceil(countBooks($query) / $limit);
  $books = getBooks($page, $sort, $query);
  require('views/books.php');
}

/**
 * @param int $id Book id
 */
function editBook (int $id): void
{
  global $breadcrumb;

  if (isset($_POST['id'])) {
    if ($image = addImage()) {
      $_POST['image'] = $image;
    }
    setBook((int) $_POST['id'], $_POST);
  }
  $book = getBook($id);
  $authors = getAuthors();
  $countries = getCountries();
  $languages = getLanguages();
  $categories = getCategories();
  $breadcrumb[] = array(
    'active' => true,
    'name' => "Editer un livre : " . $book['title'],
  );

  require('views/book.php');
}

function newBook(): void
{
  global $breadcrumb;
  $breadcrumb[] = array(
    'active' => true,
    'name' => "Ajouter un livre",
  );

  if (isset($_POST['book'])) {
    if ($image = addImage()) {
      $_POST['image'] = $image;
    }
    if ($id = addBook($_POST)) {
      header('Location: ./?action=edit&id=' . $id);
    }
  }

  $authors = getAuthors();
  $countries = getCountries();
  $languages = getLanguages();

  require('views/book.php');
}

/**
 * @return string
 */
function addImage (): ?string
{
  if (
    !isset($_FILES['image']) ||
    $_FILES['image']['error'] ||
    !in_array($_FILES['image']['type'], ['image/png', 'image/jpeg'])
  ) {
    return null;
  }
  $image = 'public/images/books/' . $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], '../' . $image);
  return $image;
}

/**
 * @param int $id Book id
 */
function removeBook (int $id): void
{
  if (deleteBook($id)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    require('views/500.php');
  }
}
