
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
               <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
             <div class="form-group">
                <label for="author">Authors</label>
                <select name='author_id' class="form-control" id="author_id">
                  <?php foreach ($a_id as $author ) {?>

                  <option value="<?php echo $author['id']; ?>">
                    <?php echo $author['name']; ?>
                  </option>
                <?php } ?>

                </select>
              </div>
            </div>
           <div class="col-6">
             <!-- col 6 -->
           </div>
       </div>
      </form>
    </div>
   </body>
 </html>
