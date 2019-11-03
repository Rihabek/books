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
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="public/images/photo1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/images/photo2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/images/photo3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
  <h1>Books List</h1>
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
            <span><i class="fas fa-globe"><?php echo $book['country'] ?></i></span>
          </div>
          <div class="card-footer text-muted">
            <a href="<?php echo $book['link']; ?>" class="btn btn-primary">Voir le livre sur wikipedia</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
