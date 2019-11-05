<?php $title='Book List' ?>
<?php ob_start(); ?>

<div class="container display-flex ">
  <div class="row">
    <div class="col-4">
      <div class="image">
        <img
          src="<?php echo $book['images']; ?>"
          class="card-img-top"
          alt="Image du livre <?php echo $book['title']; ?>"/>
      </div>

  </div>
    <div class="col-8">

      <h1 style="color:pink;"><?php echo $book['title'];  ?></h1>
      <table class="table table-striped table-dark mt-5" style="margin-bottom:5rem;">
      <thead>
        <tr>
          <th scope="col">Author</th>
          <td scope="col"><?php echo $book["author"]; ?></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Country</th>
          <td><?php echo $book["country"]; ?></td>
        </tr>
        <tr>
          <th scope="row">Language</th>
          <td><?php echo $book["language"]; ?></td>
        </tr>
        <tr>
          <th scope="row">Year</th>
          <td><?php echo $book["year"] ?></td>
        </tr>
        <tr>
          <th scope="row">Pages</th>
          <td><?php echo $book["pages"]; ?></td>
        </tr>
        <tr>
          <th scope="row">Link</th>
          <td> <a href="<?php echo $book["link"]; ?>" target="_blank">wikipedia</a></td>
        </tr>

    </div>

</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
