<?php


if (!isset($_GET['path']) || !$_GET['path']) {
  require('controllers/books.php');
  if (!isset($_GET['action']) || !$_GET['action']) {
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $sort = isset($_GET['sort']) ? (string) $_GET['sort'] : 'title';
    $query = isset($_GET['q']) ? (string) $_GET['q'] : null;
    listBooks($page, $sort, $query);
  } else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
    editBook((int) $_GET['id']);
  } else if ($_GET['action'] === 'add') {
    newBook();
  } else if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
    deleteBook((int) $_GET['id']);
  } else {
    header('Location: ./');
  }
} else {
  switch ((string) $_GET['path']) {
    case 'authors':
      require('controllers/authors.php');
      if (!isset($_GET['action']) || !$_GET['action']) {
        listAuthors();
      } else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        editAuthor((int) $_GET['id']);
      } else if ($_GET['action'] === 'add') {
        newAuthor();
      } else if ($_GET['action'] === 'unactive' && isset($_GET['id'])) {
        unactiveAuthor((int) $_GET['id']);
      } else {
        header('Location: ./?path=authors');
      }
      break;

    case 'countries':
      require('controllers/countries.php');
      if (!isset($_GET['action']) || !$_GET['action']) {
        listCountries();
      } else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        editCountry((int) $_GET['id']);
      } else if ($_GET['action'] === 'add') {
        newCountry();
      } else if ($_GET['action'] === 'unactive' && isset($_GET['id'])) {
        unactiveCountry((int) $_GET['id']);
      } else {
        header('Location: ./?path=countries');
      }
      break;

    case 'categories':
      require('controllers/categories.php');
      if (!isset($_GET['action']) || !$_GET['action']) {
        categories();
      } else if ($_GET['action'] === 'add') {
        newCategory();
      }else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        editCategory((int) $_GET['id']);
      } else if ($_GET['action'] === 'hide' && isset($_GET['id'])) {
        unactiveCategory((int) $_GET['id']);
      } else {
        header('Location: ./?path=categories');
      }
      break;

    case 'languages':
      require('controllers/languages.php');
      if (!isset($_GET['action']) || !$_GET['action']) {
        listLanguages();
      } else if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        editLanguage((int) $_GET['id']);
      } else if ($_GET['action'] === 'add') {
        newLanguage();
      } else if ($_GET['action'] === 'unactive' && isset($_GET['id'])) {
        unactiveLanguage((int) $_GET['id']);
      } else {
        header('Location: ./?path=languages');
      }
      break;
    default:
      require('views/404.php');
  }
}
