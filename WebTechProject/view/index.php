<!-- Source: https://stackoverflow.com/questions/21727317/how-to-check-confirm-password-field-in-form-without-reloading-page/21727518 -->
            <!--  https://getbootstrap.com/ -->
            <!-- https://html.com/attributes/input-pattern/ -->
<?php
ob_start();
include "../model\dbconnect.php";
ob_end_clean();

// create customer account
if(isset($_POST["signup"])){
    $name=$_POST["username"];
    $mail=$_POST["email"];
    $password=$_POST["password"];
    $password2=$_POST["confirm_password"];
    if($password==$password2){
        $sql="INSERT INTO `customer`(`username`, `email`, `password`) VALUES ('$name','$mail',md5('$password'))";
        $result= $conn->query($sql);
        if($result){
             header("Location: signin.php");
             exit();
        }
        else{
            ?>
            <script>alert("Unable to Sign Up")</script>
            <?php
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php
    include_once("navbar.php");
    ?>
    <!-- Sign Up form -->
   <div class="formbody text-center">
		<h1>SignUp Form</h1>
				<form class="signup" method="post">
                <label for="username" class="sr-only">Username</label>
					<input class="form-control" type="text" name="username" placeholder="Username" pattern="[A-Za-z0-9]+" required autofocus oninvalid="this.setCustomValidity('Username should contain only letters and numbers')" oninput="this.setCustomValidity('')">
                    <label for="email" class="sr-only">Email address</label>
					<input class="form-control" type="email" name="email" placeholder="Email" required>
                    <label for="password" class="sr-only">Password</label>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                    <span id='message'></span>
                    <br>
                    <label for="password" class="sr-only">Confirm Password</label>
					<input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                    <br>
					<input class="btn btn-lg btn-primary btn-block" type="submit" name="signup" value="Sign Up">
				</form>
                
				<p>Already have an Account? <a href="signin.php"> Login Now!</a></p>
</div>


<?php
        include_once("footer.php");
      ?>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<!-- verify that provided passwords are the same -->
<script >
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Passwords Match').css('color', 'green');
  } else 
    $('#message').html('Passwords do not match').css('color', 'red');
});
</script>
