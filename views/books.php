<?php $title = "bookzel"; ?>
<?php ob_start(); ?>
<style>
  .books .image {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20rem;
  }

  .books .image > img {
    height: 100%;
    width: 100%;
  }

  .books .title {
    height: 3rem;
  }
</style>
<div class="container">
  <h1 style="color: white;">Books List</h1>
  <div class="row">
    <?php foreach ($books as $book) { ?>
      <div class="col-md-3 mt-4">
        <div class="card books h-100">
          <div class="image">
            <img
              src="public/<?php echo $book['imageLink']; ?>"
              class="card-img-top"
              alt="Image du livre <?php echo $book['title']; ?>">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $book['title']; ?></h5>
            <div class="card-body">
              <i class="fas fa-language"><?php echo $book ['language'];?> </i>
            </div>
          </div>
          <div class="card-footer text-muted">
            <a href="<?php echo $book['link']; ?>" class="btn btn-danger">Informations</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
