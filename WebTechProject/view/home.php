<!-- Source: https://getbootstrap.com/ -->
<?php
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
    <title>GreenGro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="js/index.js"></script> 
</head>
<body>
  <!-- Navbar and database connection -->
  <?php
    include_once("navbar.php");
    ob_start();
    include "../model\dbconnect.php";
    ob_end_clean();
   
    ?>

    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="medicinal.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Medicinal Plants</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="decorative.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Ornamental Plants</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="aromatic.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Aromatic Herbs</h3>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

      <h1 class="heading">On Sale</h1>

      <!--Products-->
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="aloe.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Aloe Vera</h4>
              <h5 class="price">GH₵ 20.00</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Aloe Vera">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="aloe">
</form>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="chamomile.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Chamomile</h4>
              <h5 class="price">GH₵ 20.00</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Chamomile">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="chamomile">
</form>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <img src="bee balm.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Bee Balm</h4>
                <h5 class="price">GH₵ 20.00</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Bee Balm">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="beebalm">
</form>
              </div>
            </div>
          </div>
          </div>
          <!--Row 2-->
          <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="mint.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Mint</h4>
                <h5 class="price">GH₵ 20.00</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Mint">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="mint">
</form>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="succulent.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title">Succulents</h4>
                <h5 class="price">GH₵ 20.00</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Succulents">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="succulent">
</form>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="card">
                <img src="lavender.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Lavender</h4>
                  <h5 class="price">GH₵ 20.00</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                </div>
              </div>
            </div>
      </div>


      <!--Footer-->
      <?php
        include_once("footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


