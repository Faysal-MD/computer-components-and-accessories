<?php
//This script will handle login
session_start();
$login = false;
$showError = false;
// check if the user is already logged in
if (isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $err = "Please enter username + password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  }


  if (empty($err)) {
    $sql = "SELECT userid, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;


    // Try to execute this statement
    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $userid, $username, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($password, $hashed_password)) {
            // this means the password is corrct. Allow user to login
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["userid"] = $userid;
            $_SESSION["loggedin"] = true;
            $login=true;

            //Redirect user to welcome page
            header("location: index.php");
          }
          else{
            $showError = "Invalid Credentials";
          }
        }
      }
    }
    else{
      $showError = "Invalid Credentials";
  }
  }
}


?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>PHP login system!</title>
</head>

<body>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
    </div> ';
    }
    ?>
  <div class="container mt-4 offset-3">
    <h3>Login Here:</h3>
    <hr>
    <form action="" method="post" class="container card d-flex align-items-center mt-5 p-5">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Username</label>
          <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter your username" required>
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter password" required>
        </div>
        <div class="col-6">
          <button type="submit" name="login" class="btn btn-danger">Sign in</button>
        </div>
        <div class="col-6">
          <a href="register.php"><button type="button" class="btn btn-danger">Sign Up</button></a>
        </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>