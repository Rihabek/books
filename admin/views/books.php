<?php $title = "Liste des livres"; ?>
<?php ob_start(); ?>
<style>
  .book .image {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .book .image a,
  .book .image img {
    height: 100%;
    width: 100%;
  }

  .book .title > a {
    color: inherit;
  }

  .book .card-footer {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .book .card-footer .btn {
    margin-right: 8px;
    flex: 1;
  }

  .book .card-footer .btn:last-child {
    margin-right: 0;
  }

  @media (min-width: 768px) {
    .book .image {
      height: 300px;
    }
  }

  @media (min-width: 1200px) {
    .book .image {
      height: 360px;
    }
  }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
  </head>
  <body>
    <?php include('../utils/uri.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <h1>Liste des livres</h1>
        </div>
        <div class="col-md-6 col-lg-3">
          <form id="search" method="get">
            <input value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>" class="form-control mr-sm-2" type="search" placeholder="Rechercher un livre" aria-label="Search">
          </form>
        </div>
        <div class="col-md-12 col-lg-3 ml-auto">
          <form method="get" action="<?php echo getQueries($_SERVER['QUERY_STRING'], array(), array('page', 'sort')); ?>">
            <div class="form-group">
              <select class="form-control" id="sortBooks">
                <?php foreach ($sortValues as $value) { ?>
                  <option <?php echo $value['value'] === $sort ? 'selected' : ''; ?>
                    value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <?php foreach ($books as $book) { ?>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="card book h-100" data-book>
                <div class="image">
                  <img
                  src="../<?php echo $book['image']; ?>"
                  class="card-img-top"
                  alt="Image du livre <?php echo $book['title']; ?>">
                </div>
                <div class="card-body">
                  <h5 class="card-title title" data-title>
                    <?php echo $book['title']; ?>
                  </h5>
                  <p class="card-text text-muted">
                    <?php echo $book['author'] . ' (Auteur)'; ?>
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a class="btn btn-primary" href="?action=edit&id=<?php echo $book['id']; ?>">
                    Editer
                  </a>
                  <a class="btn btn-danger" data-toggle="modal" data-remove-book="#removeBook" href="?action=delete&id=<?php echo $book['id']; ?>">
                    Supprimer
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <?php if ($pages > 1) { ?>
          <div class="row mt-3">
            <div class="col-md-12">
              <nav aria-label="Page navigation livres">
                <ul class="pagination justify-content-center">
                  <?php if ($page === 1) { ?>
                    <li class="page-item disabled">
                      <span class="page-link">Précédent</span>
                    </li>
                  <?php } else { ?>
                    <li class="page-item">
                      <a class="page-link" href="<?php echo getQueries($_SERVER['QUERY_STRING'], array('page' => $page - 1)); ?>">Précédent</a>
                    </li>
                  <?php } ?>
                  <?php for ($i = 1; $i <= $pages; $i++) { ?>
                    <?php if ($i === $page) { ?>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">
                          <?php echo $i; ?> <span class="sr-only">(current)</span>
                        </span>
                      </li>
                    <?php } else { ?>
                      <li class="page-item">
                        <a class="page-link" href="<?php echo getQueries($_SERVER['QUERY_STRING'], array('page' => $i)); ?>"><?php echo $i; ?></a>
                      </li>
                    <?php } ?>
                  <?php } ?>
                  <?php if ($page === $pages) { ?>
                    <li class="page-item disabled">
                      <span class="page-link">Suivant</span>
                    </li>
                  <?php } else { ?>
                    <li class="page-item">
                      <a class="page-link" href="<?php echo getQueries($_SERVER['QUERY_STRING'], array('page' => $page + 1)); ?>">Suivant</a>
                    </li>
                  <?php } ?>
                </ul>
              </nav>
              <div>
              <?php } ?>
            </div>
          </div>

          <div class="modal fade" id="removeBook" tabindex="-1" role="dialog" aria-labelledby="removeBookLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="removeBookLabel">Supprimer le livre "<span id="removeBookTitle"></span>" ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <button type="button" class="btn btn-danger" data-success>Supprimer</button>
                </div>
              </div>
            </div>
          </div>

  </body>
</html>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
