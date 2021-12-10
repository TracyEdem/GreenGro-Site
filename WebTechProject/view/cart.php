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
// delete item from cart
if(isset($_POST["delete"])){
    $item = $_POST["cartid"];
    $delsql = "DELETE FROM cart WHERE cartid='$item'";
    $delresults = $conn->query($delsql);
    if($delresults){
        header("location:cart.php");
        exit;  
    }
}
// Checkout and delete all items in cart
if(isset($_POST["checkout"])){
    $check = "UPDATE customer SET paymentstatus='Paid' WHERE email='$email'";
    $checkresult=$conn->query($check);
    if($checkresult){
        
        $delcart ="DELETE FROM cart where custmail='$email'";
        $delresult=$conn->query($delcart);
        
        if($delresult){
            echo "<script>alert('Payment Successful!')</script>";
            header("location:cart.php");
            exit; 
           
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
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="js/cart.js"></script> 
</head>
<body>
<?php
    include_once("navbar.php");
    ?>
    <h1>Welcome to Your Cart!</h1>
<?php

// Add plant to cart if available
     if(isset($_POST["aloe"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND `availability` ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}
     }

    if(isset($_POST["chamomile"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}
    }
  

if(isset($_POST["beebalm"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";;
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}  
}

     if(isset($_POST["mint"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";;
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}} 

    if(isset($_POST["succulent"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
       
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["lavender"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["fennel"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["anise"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
       
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["pmint"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["parsley"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
 
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result) ){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    if(isset($_POST["rosemary"])){
        $value=$_POST["plantname"];
        $sql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='In Stock'";
        $result= $conn->query($sql);
        $outsql="SELECT plant_no FROM plant WHERE common_name='$value' AND availability ='Out of Stock'";
        $outresult= $conn->query($outsql);
        if(mysqli_num_rows($result)==1){

            while($data = mysqli_fetch_array($result)){
                $sql2="INSERT INTO cart(plantid,custmail) VALUES ('$data[plant_no]','$email')";
                $result2= $conn->query($sql2);
            if($result2){
                echo "Successfully added to cart!";
            }
        }
    }
    else{ echo '<script>alert("Out of Stock!")</script>';}}

    // Display items in cart

    $display = "SELECT * FROM cart WHERE custmail='$email'";
    $cartresults = $conn->query($display);

    if ($cartresults->num_rows > 0) {
        echo "<table width='50%'><tr><th>Name</th><th>Unit Price</th></tr>";
        while($row = $cartresults->fetch_assoc()) {
            $id = $row["plantid"];
            $plantquery ="SELECT * FROM plant WHERE plant_no='$id'";
            $sumquery="SELECT  custmail, SUM(plant.price) as Total  FROM cart INNER JOIN plant ON plant.plant_no=cart.plantid  WHERE custmail='$email'";
            $plantresults = $conn->query($plantquery);
            $sumresults = $conn->query($sumquery);
            if ($plantresults->num_rows > 0) {
                while($row2 = $plantresults->fetch_assoc()) {
                    echo "<tr height='20px'><td>".$row2["common_name"]."</td><td>GH₵ ".$row2["price"]."</td><td>
                    <form method='post'>
                    <input type='hidden' name='cartid' value='$row[cartid]'>
                    <input type='submit' class='btn btn-danger' name='delete' value='Delete' onclick='return confirm(`Are you sure you want to delete this item from cart?`)'>
                </form>
                    </td></tr>";
                }
            }
            
        }
        echo "</table>";
        while($row3 = $sumresults->fetch_assoc()) {
            echo "<h3>Total= GH₵".$row3['Total']."</h3>";
            echo "<form method='post'>
            <input type='hidden' name='payment' value='Paid'>
            <input type='submit' class='btn btn-primary' name='checkout' value='Checkout' onclick='return confirm(`Are you sure you want to buy these items?`)'></form>";
        }
        
    }

   

    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>


