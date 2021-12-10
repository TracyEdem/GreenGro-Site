<!-- Source: https://getbootstrap.com/ -->
<?php
ob_start();
include "../model\dbconnect.php";
ob_end_clean();

//Start session,get session variable,email and store when login is successful
session_start();
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
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<style>
  .footer{
    padding-top: 30px;
    padding-bottom: 20px;
    background: rgb(83, 79, 79);
    margin-top: -50px;
}
.contact{
    color: rgb(231, 247, 244);
}
.links{
    color: rgb(231, 247, 244);
}

.copyright{
    text-align: center;
    color: rgb(231, 247, 244);
}

h1{
  padding-top: 150px;
  padding-bottom: 30px;
  text-align: center;
}

.formbody{
  padding-bottom: 200px;
}
</style> 
<body>
  <!-- NavBar -->
<?php
    include_once("navbar.php");
    ?>
    <h1>Hi! Kindly Update Plant Availability Here.</h1>


      <!-- check if data is submitted and update in database with corresponding information--> 
    <?php
      
    if(isset($_POST["submitplant"])){
      $data = $_POST['plantName'];
      $stock= $_POST['availability'];
      if($stock=="In Stock"){
        $sql="SELECT common_name FROM plant WHERE common_name='$data'";
        $result= $conn->query($sql);
        if($result){
         $sql2="UPDATE plant SET availability='$stock' WHERE common_name='$data'";
         $result2= $conn->query($sql2); 
         echo "<script>alert('Update Successful! Plant In Stock')</script>";
       }
      }
     
  
     elseif( $stock=="Out of Stock"){
      $sql="SELECT common_name FROM plant WHERE common_name='$data'";
      $result= $conn->query($sql);
      if($result){
       $sql2="UPDATE plant SET availability='$stock' WHERE common_name='$data'";
       $result2= $conn->query($sql2);
       echo "<script>alert('Update Successful! Plant Out of Stock')</script>";
     }
    }  
  }
    
  ?> 

<!-- Form to update plant availability -->
    <div class="formbody text-center">
    <form method="post">
      Plant Name:
      <br>
      <input type="search" name="plantName" id="plantname">
      <br>
      Availability:
      <br>
      <!-- <input type="radio" name="availability" id="instock" value="In Stock">
      <label for="instock">In Stock</label><br>
      <input type="radio" name="availability" id="outstock" value="Out of Stock">
      <label for="outstock">Out of Stock</label><br> -->
      <select id="availability" name="availability">
  <option value="In Stock">In Stock</option>
  <option value="Out of Stock">Out of Stock</option>
</select>
      <input type="submit" value="Submit" name="submitplant"> 
    </form>
     
    </div>

   
<!-- Footer -->
<?php
        include_once("footer.php");
      ?>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>