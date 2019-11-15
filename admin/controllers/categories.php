<?php
require ('models/categories.php');


function categories() {
  $categories = getCategories();
  require ('views/categories.php');
}

function listCategories(): void
{
  global $breadcrumb;
  $breadcrumb[0]['active'] = true;
  $countries = getCategorie(true);
  require('views/categories.php');
}


function newCategory(): void
{
  global $breadcrumb;
  $breadcrumb[] = array(
    'active' => true,
    'name' => "Ajouter une catégorie",
  );

  if (isset($_POST['name'])) {
    if ($id = addCategory($_POST)) {
      header('Location: ./?path=categories&action=edit&id=' . $id);
    }
  }

  require('views/category.php');
}


function editCategory (int $id): void
{
  global $breadcrumb;

  if (isset($_POST['id'])) {
    setCategory((int) $_POST['id'], $_POST);
  }

  $category = getCategory($id);

  $breadcrumb[] = array(
    'active' => true,
    'name' => "Editer une categorie: " . $category['name'],
  );

  require('views/category.php');
}

function unactiveCategory (int $id): void
{
  if (hideCategory($id)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    require('views/500.php');
  }
}


 ?>
