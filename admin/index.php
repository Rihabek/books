<?php
  session_start ();

  $db = new PDO('mysql:host=localhost;dbname=books', 'root');

  if (isset($_SESSION['id'])) { // si on se connecte session destroy
    session_destroy();
  }


  if (isset($_POST['email'])){
    $connexion = (string) $_POST['email'];
    $password = (string) $_POST['password'];

     if (filter_var($connexion, FILTER_VALIDATE_EMAIL) && $password) {
      // $password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $db->prepare('SELECT * FROM users WHERE email= :email');
      $stmt->bindParam(':email', $connexion, PDO::PARAM_STR);
      $stmt->execute();

      $admin = $stmt->fetch();

      if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['id'] =$admin['id'];
        $_SESSION['name'] =$admin['name'];
        header('Location: ./profil.php');

      }
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <div style="padding: 10em;"class="container text-center ">
      <form class="" action="./" method="post">
      <div class="row">
        <div class="col-md-12 mt-6">
          <div class="form-group mt-3">
            <h1 style="font-size:5em; color:#C82333;">Connexion</h1>
            <label for="email"><strong>Email address</strong></label>
            <input name="email" required type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password"><strong>Password</strong></label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <button id="submit" type="submit" class="btn btn-danger">Submit</button>
        </div>
      </div>
    </div>

    </form>
  </body>
</html>
