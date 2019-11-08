
<?php

require('../utils/db.php');

$db = dbConnect();
$id = isset($_GET['id'])? (int)$_GET['id']: null;

if ($id){
  // recupere les données d'un livre
  $stmt = $db->prepare('SELECT * FROM books WHERE id = :id');
  $stmt-> bindparam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $book = $stmt-> fetch();
}
  $stmt = $db->prepare('SELECT * FROM authors ORDER BY `name`');
  $stmt->execute();
  $a_id = $stmt ->fetchAll();

  if (isset($_POST['book'])){
    $title = (string) $_POST['title'];
    $description = (string) $_POST['description'];
    $authorId = (string) $_POST['author_id'];
    $pages = (int) $_POST['pages'];
    $wikipediaLink = (string) $_POST['wikipedia_link'];
    $publishedYear = (int) $_POST['published_year'];
    $language = (string) $_POST['language'];
    $country = (string) $_POST['country'];


    if (strlen($title) > 255) {
      $title = substr($title, 0, 255);
    }

    if (!preg_match('/^(http|https):\/\/([a-z]{2})\.wikipedia\.org\/([a-zA-Z0-9-_\/%:]+)?/i', $wikipediaLink)){

      $wikipediaLink ='';
    }
    $stmt = $db->prepare('INSERT INTO
      `books` (
      `title`,
      `description`,
      `author_id`,
      `pages`,
      `wikipedia_link`,
      `year`,
      `language`,
      `country`
    )
    VALUES (
      :title,
      :description,
      :author_id,
      :pages,
      :wikipedia_link,
      :year,
      :language,
      :country
    )');

    $stmt-> bindparam(':title', $title, PDO::PARAM_STR);
    $stmt-> bindparam(':description', $description, PDO::PARAM_STR);
    $stmt-> bindparam(':author_id', $authorId, PDO::PARAM_INT);
    $stmt-> bindparam(':pages', $pages, PDO::PARAM_INT);
    $stmt-> bindparam(':wikipedia_link', $wikipediaLink, PDO::PARAM_STR);
    $stmt-> bindparam(':year', $publishedYear, PDO::PARAM_INT);
    $stmt-> bindparam(':language', $language, PDO::PARAM_STR);
    $stmt-> bindparam(':country', $country, PDO::PARAM_STR);

    $stmt->execute();

    $id = $db->lastInsertId();

  }

 ?>

 <!DOCTYPE html>
 <html lang="*en" dir="ltr">
   <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <div class="container">
      <h1 class="mb-3 mt-3">Add a book </h1>
       <form name="myForm" action="./" method="post">
        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
              <label for="title">Book title</label>
              <input  value="<?php echo isset($book) ? $book['title'] :''; ?>" name="title" maxlength="30" type="text" class="form-control" id="title" placeholder="Book's title">
              <small id="titlehelp" class="form-text text-muted">Books title between 0 and 255.</small>
             </div>
             <div class="form-group">
              <label for="description">Description</label>
              <textarea  value="<?php echo isset($book) ? $book['description'] :''; ?>"  name="description" class="form-control" id="description" rows="3"></textarea>
             </div>
             <div class="form-group">
                <label for="author_id">Authors</label>
                <select name="author_id" class="form-control" id="author_id">
                  <?php foreach ($a_id as $author ) {?>
                    <?php if (isset($book) && $book['author_id'] == $author['id']){ ?>
                      <option selected='selected' value="<?php echo $author['id']; ?>">
                        <?php echo $author['name']; ?>
                      </option>
                    <?php } else {?>
                      <option  value="<?php echo $author['id']; ?>">
                        <?php echo $author['name']; ?>
                      </option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
               <label for="pages">Pages number</label>
               <input name="pages" value="<?php echo isset($book) ? $book['pages'] :''; ?>" type="number" class="form-control"step="1" min="0" id="pages">
              </div>
            </div>
          <div class="col-md-6">
             <div class="form-group">
              <label for="wikipedia_link">wikipedia's Link</label>
              <input
                name="wikipedia_link"
                value="<?php echo isset($book) ? $book['wikipedia_link'] :''; ?>"
                type="text"
                class="form-control"
                id="wikipedia_link">
             </div>
             <div class="form-group">
              <label for="language">Language</label>
              <input
                name="language"
                value="<?php echo isset($book) ? $book['language'] :''; ?>"
                type="text"
                class="form-control"
                id="language">
             </div>
             <div class="form-group">
              <label for="published_year">Published year</label>
              <input
                name="published_year"
                value="<?php echo isset($book) ? $book['year'] :''; ?>"
                type="number"
                class="form-control"
                id="year">
             </div>
             <div class="form-group">
              <label for="country">Country</label>
              <input
                name="country"
                value="<?php echo isset($book) ? $book['country'] :''; ?>"
                type="text"
                class="form-control"
                id="country">
             </div>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button  type="submit" name="submit" value="submit" class="btn btn-lg bg-danger">Submit</button>
          </div>
        </div>
      </form>
    </div>
   </body>
 </html>
