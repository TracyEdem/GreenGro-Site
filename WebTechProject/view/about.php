<!-- Source: https://getbootstrap.com/ -->

<?php
ob_start();
include "../model\dbconnect.php";
ob_end_clean();
session_start();
//Start session,get session variable,email and store when login is successful
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("location:signin.php");
        exit;   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About GreenGro</title>
  <link rel="stylesheet" href="css/about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
  <!-- NavBar -->
<?php
    include_once("navbar.php");

    $sqlname="SELECT username FROM customer WHERE email='$email'";
    $name= $conn->query($sqlname);
    if(mysqli_num_rows($name)==1){
      while($data = mysqli_fetch_array($name)){
      ?>
      
   

    <!--Welcome and About text-->
    <div class="about row">
    <img src="logo.png" class="img-fluid col-sm-6" alt="...">

    <div class="aboutbody col-sm-5">
    <?php
        echo "<h2>Hi ". $data['username']." Welcome to GreenGro!</h2>";
      }
    }
    
    ?>
   
  
    <p>
      <br>
     Your number one source for all things plant-related. We're dedicated to giving you the very best of our plants, with a focus on Aromatic plants, Ornamental plants,and Medicinal plants.
  Founded in 2021 by Tracy Edem Ameyibor, GreenGro has come a long way from its beginnings in Ashesi, Ghana.</p><p>When Tracy first started out, 
  her passion for rare plant species drove her to  do tons of research and start a company so that GreenGro can offer you the world's most chemical-fertilizer-free plants. 
  We now serve customers all over the world, and are thrilled that we're able to turn our passion into our own website.
</p>
<p>
  We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
</p>
  <p>
  Sincerely,<br>
  Tracy Edem Ameyibor
</p>
</div>
</div>

   <!--Footer-->
   <?php
        include_once("footer.php");
      ?>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>