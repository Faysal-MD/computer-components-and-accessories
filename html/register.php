<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $email = $_POST["Email"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirm_password"];
    // $exists=false;

    // Check whether this username exists
    $existSql_username = "SELECT * FROM users WHERE username = '$username'";
    $existSql_email = "SELECT * FROM users WHERE Email = '$email'";
    $result_username = mysqli_query($conn, $existSql_username);
    $result_email = mysqli_query($conn, $existSql_email);
    $numExistRows_username = mysqli_num_rows($result_username);
    $numExistRows_email = mysqli_num_rows($result_email);
    if($numExistRows_username > 0 || $numExistRows_email > 0){
        // $exists = true;
        $showError = "Username or Email Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users ( username, Email, password) VALUES ('$username', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
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

  <title>Register</title>
</head>

<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
    </div> ';
    }
    ?>
  <div class="container mt-4">
    <h3>Please Register Here:</h3>
    <hr>
    <form action="" method="post" class="container card d-flex align-items-center mt-5 p-5">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Username</label>
          <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter an username" required>
        </div>
        <div class="form-group col-md-12">
          <label for="inputEmail4">Email</label>
          <input type="text" class="form-control" name="Email" id="inputEmail4" placeholder="Enter your email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter a password" required>
        </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="inputPassword" placeholder="Confirm Password" required>
      </div>
      <div class="col-6">
      <button type="submit" class="btn btn-danger">Sign Up</button>
      </div>
      <div class="col-6">
          <a href="login.php"><button type="button" class="btn btn-danger">Sign In</button></a>
        </div>
    </form>
  </div>

  <footer>
        <?php
            include "footer.php";
        ?>  
    </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>