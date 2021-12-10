<!-- Source: https://getbootstrap.com/ -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="css/signin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
<?php
   session_start();
    include_once("navbar.php");
    ob_start();
include "../model\dbconnect.php";
ob_end_clean();

if(isset($_POST["signin"])){
    $mail=$_POST["email"];
    $password=md5($_POST["password"]);
    $sql="SELECT username FROM customer WHERE email='$mail' ";
    $result= $conn->query($sql);
    if(mysqli_num_rows($result)==1){
      $_SESSION["email"]=$mail;
      header("Location: home.php");
             exit();
  } 
  if($mail=="admin@123.com" ){
  
      $_SESSION["email"]=$mail;
      header("Location: admin.php");
             exit();
  } 


  
  
  }

?>
    <!-- log in form -->
    <div class="formbody text-center">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="signin" value="Sign In">
      <br><br>
      <p>Don't have an Account? <a href="index.php"> Sign Up Now!</a></p>
    </form>

    
    </div>


         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
<?php
        include_once("footer.php");
      ?>
</html>