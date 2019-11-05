<?php $title = "bookzel"; ?>
<?php ob_start(); ?>

<style>
.info {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  margin-bottom: 0.8rem;
  display: flex;
  align-items: center;
}

.info:last-child {
  margin-bottom: 0;
}
.material-icons{
  margin-right: 0.9rem;
}

.image {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 300px;
}
.image img {
  height: 100%;
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
              src="<?php echo $book['image']; ?>"
              class="card-img-top"
              alt="Image du livre <?php echo $book['title']; ?>"/>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $book['title']; ?></h5>
            <div class="card-body">
              <div class="infos">
                <div class="info">
                  <i style="color:#4C0517;"class="material-icons">create</i>
                  <?php echo $book['author']; ?>
                </div>
                <div class="info">
                  <i style="color:#4C0517;" class="material-icons">date_range</i>
                  <?php echo $book["year"] ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted text-center">
            <a href="?action=book&id=<?php echo $book['id']; ?>" class="btn btn-danger ">Informations</a>
          </div>

        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
