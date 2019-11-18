<?php $title = isset($categories) ? $categories['name'] : "Add an category"; ?>
<?php ob_start(); ?>


    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="name">Category</label>
              <input
                required
                name="name"
                value="<?php echo isset($category) ? $category['name'] : ''; ?>"
                type="text" class="form-control"
                id="name"
                placeholder="Nom de la categorie">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="id" value="<?php echo isset($category['id']) ? $category['id'] : ''; ?>">
            <button name="category" type="submit" class="btn btn-primary">Valider</button>
          </div>
        </div>
      </form>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
