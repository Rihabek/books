<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $title ?> - Admin - E-bibliothèque</title>
    <link rel="icon" href="../public/images/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/app.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="./">Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="./" id="booksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Livres
            </a>
            <div class="dropdown-menu" aria-labelledby="booksDropdown">
              <a class="dropdown-item" href="./">Liste des livres</a>
              <a class="dropdown-item" href="?action=add">Ajouter un livre</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?path=authors" id="authorsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Auteurs
            </a>
            <div class="dropdown-menu" aria-labelledby="authorsDropdown">
              <a class="dropdown-item" href="?path=authors">Liste des auteurs</a>
              <a class="dropdown-item" href="?path=authors&action=add">Ajouter un auteur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?path=countries" id="countriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pays
            </a>
            <div class="dropdown-menu" aria-labelledby="countriesDropdown">
              <a class="dropdown-item" href="?path=countries">Liste des pays</a>
              <a class="dropdown-item" href="?path=countries&action=add">Ajouter un pays</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?path=languages" id="languagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Langues
            </a>
            <div class="dropdown-menu" aria-labelledby="languagesDropdown">
              <a class="dropdown-item" href="?path=languages">Liste des langues</a>
              <a class="dropdown-item" href="?path=languages&action=add">Ajouter une langue</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?path=categories" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
              <a class="dropdown-item" href="?path=categories">List des catégories</a>
              <a class="dropdown-item" href="?path=categories&action=add">Ajouter une catégorie</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <?php if (isset($breadcrumb)) { ?>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <?php foreach ($breadcrumb as $value) { ?>
              <?php if (isset($value['active']) && $value['active']) { ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $value['name']; ?></li>
              <?php } else { ?>
                <li class="breadcrumb-item"><a href="<?php echo $value['link']; ?>"><?php echo $value['name']; ?></a></li>
              <?php } ?>
            <?php } ?>
          </ol>
        </nav>
      </div>
    <?php } ?>
    <?php echo $content ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/app.js"></script>
  </body>
</html>
