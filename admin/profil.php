<?php

// includ('is-log.php');  pour se connecter

  session_start ();
    if (!isset($_SESSION['id'])) {
      header('Location: ./');
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <div class="row">
     Id: <?php echo $_SESSION['id']; ?>

   </div>
   <div class="row">
     Name: <?php echo $_SESSION['name']; ?>
   </div>
 </body>
</html>
