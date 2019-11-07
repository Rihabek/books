
<?php

require('../utils/db.php');


  $db = dbConnect();
  $stmt = $db->prepare('SELECT * FROM authors ORDER BY `name`');
  $stmt->execute();
  $a_id = $stmt ->fetchAll()


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
       <form class="./" action="index.html" method="post">
        <div class="row">
          <div class="col-md-6">
             <div class="form-group">
              <label for="title">Book title</label>
              <input name="title" maxlength="30" type="email" class="form-control" id="title" placeholder="Book's title">
              <small id="titlehelp" class="form-text text-muted">Books title between 0 and 255.</small>
             </div>
             <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" id="description" rows="3"></textarea>
             </div>
             <div class="form-group">
                <label for="author_id">Authors</label>
                <select name="author_id" class="form-control" id="author_id">
                  <?php foreach ($a_id as $author ) {?>
                    <option value="<?php echo $author['id']; ?>">
                      <?php echo $author['name']; ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
               <label for="pages">Pages number</label>
               <input name="pages"
                 type="number"
                 class="form-control"
                 step='1'
                 min='0'
                 id="pages">
              </div>
            </div>
          <div class="col-md-6">
             <div class="form-group">
              <label for="wikipidia_link">wikipidia's Link</label>
              <input name="year"
                type="number"
                class="form-control"
                id="wikipidia_link">
             </div>
             <div class="form-group">
              <label for="language">Language</label>
              <input name="language"
                type="text"
                class="form-control"
                id="language">
             </div>
             <div class="form-group">
              <label for="published_year">Published year</label>
              <input name="pub_year"
                type="number"
                class="form-control"
                id="published_year">
             </div>
             <div class="form-group">
              <label for="country">Country</label>
              <input name="country"
                type="text"
                class="form-control"
                id="country">
             </div>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-lg bg-danger">Submit</button>
          </div>
        </div>
      </form>
    </div>
   </body>
 </html>
