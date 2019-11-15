<?php $title = isset($book) ? $book['title'] : "Ajouter un livre"; ?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
  </head>
  <body>
    <div class="container">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Titre du livre</label>
              <input
              required
              name="title"
              value="<?php echo isset($book) ? $book['title'] : ''; ?>"
              type="text" class="form-control"
              id="title"
              placeholder="Titre du livre">
            </div>
            <div class="form-group">
              <label for="author_id">Auteur</label>
              <select name="author_id" class="form-control" id="author_id">
                <?php foreach ($authors as $value) { ?>
                  <option
                  <?php echo isset($book['author_id']) && $book['author_id'] === $value['id'] ? 'selected' : ''; ?>
                  value="<?php echo $value['id']; ?>">
                  <?php echo $value['name']; ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="country_id">Pays</label>
            <select name="country_id" class="form-control" id="country_id">
              <?php foreach ($countries as $value) { ?>
                <option
                <?php echo isset($book['country_id']) && $book['country_id'] === $value['id'] ? 'selected' : ''; ?>
                value="<?php echo $value['id']; ?>">
                <?php echo $value['name']; ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="language_id">Language</label>
          <select name="language_id" class="form-control" id="language_id">
            <?php foreach ($languages as $value) { ?>
              <option
              <?php echo isset($book['language_id']) && $book['language_id'] === $value['id'] ? 'selected' : ''; ?>
              value="<?php echo $value['id']; ?>">
              <?php echo $value['name']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="custom-file">
        <input name="image" type="file" class="custom-file-input">
        <label class="custom-file-label" for="file" data-browse="Choisir">Choisir une image</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3"><?php echo isset($book) ? $book['description'] : ''; ?></textarea>
      </div>
      <div class="form-group">
        <label for="pages">Année</label>
        <input
        name="year"
        value="<?php echo isset($book) ? $book['year'] : ''; ?>"
        type="number"
        step="1"
        class="form-control"
        id="year"
        placeholder="Année">
      </div>
      <div class="form-group">
        <label for="pages">Nombre de pages</label>
        <input
        name="pages"
        value="<?php echo isset($book) ? $book['pages'] : ''; ?>"
        type="number"
        step="1"
        class="form-control"
        id="pages"
        placeholder="Nombre de pages">
      </div>
      <div class="form-group">
        <label for="wikipedia_link">Lien Wikipedia</label>
        <input
        name="wikipedia_link"
        value="<?php echo isset($book) ? $book['wikipedia_link'] : ''; ?>"
        type="text"
        class="form-control"
        id="wikipedia_link"
        placeholder="Lien Wikipedia">
      </div>
      <div class="form-group">
        <label for="categories_id">Category</label>
        <select name="categories_id" class="form-control" id="categories_id">
          <?php foreach ($categories as $value) { ?>
            <option
            <?php echo isset($book['categories_id']) && $book['categories_id'] === $value['id'] ? 'selected' : ''; ?>
            value="<?php echo $value['id']; ?>">
            <?php echo $value['name']; ?>
          </option>
        <?php } ?>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <input type="hidden" name="id" value="<?php echo isset($book['id']) ? $book['id'] : ''; ?>">
    <button name="book" type="submit" class="btn btn-primary">Valider</button>
  </div>
</div>
</form>
</div>



  </body>
</html>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
