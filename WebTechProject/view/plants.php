<!-- Source: https://getbootstrap.com/ -->
    <!-- https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5674267/ -->
    <!-- https://en.wikipedia.org/wiki/Ornamental_plant#:~:text=Ornamental%20plants%20are%20plants%20that,a%20major%20branch%20of%20horticulture. -->
    <!-- https://www.sciencedirect.com/topics/pharmacology-toxicology-and-pharmaceutical-science/medicinal-plant -->
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
    <title>Plants</title>
    <link rel="stylesheet" href="css/plantstyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <script src="js/plants.js"></script> 
</head>
<body>
    <!--Navbar-->
    <header>
        <nav class="navbar navbar-light" style="background-color: #a3a3a359;">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#">GreenGro</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Plants
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#list-item-1">Ornamental</a></li>
                      <li><a class="dropdown-item" href="#list-item-2">Aromatic</a></li>
                      <li><a class="dropdown-item" href="#list-item-3">Medicinal</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="logout">
              <button class="btn btn-outline-danger" href="signout.php">Log Out</button>
             </div>
              </div>
            </div>
          </nav>
        </header>
<!-- ornamental plants info -->
      <div data-bs-spy="scroll" data-bs-target=".dropdown-menu" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1" class="type">Ornamental</h4>
        <p>
            <div class="plant-description">
            <h5>Description</h5>
            Ornamental plants are plants that are grown for decorative purposes in gardens and landscape design projects, as houseplants, cut flowers and specimen display.
             The cultivation of ornamental plants comes under floriculture and tree nurseries, which is a major branch of horticulture.
             Commonly, ornamental garden plants are grown for the display of aesthetic features including: flowers, leaves, scent, overall foliage texture, fruit, stem and bark, and aesthetic form. In some cases, unusual features may be considered to be of interest, such as the prominent thorns of Rosa sericea and cacti. 
             In all cases, their purpose is for the enjoyment of gardeners, visitors, and the public institutions.
             The term largely corresponds to 'garden plant', though the latter is much less precise, as any plant may be grown in a garden. Ornamental plants are plants which are grown for display purposes, rather than functional ones. While some plants are both ornamental and functional, people usually use the term “ornamental plants” to refer to plants which have no value beyond being attractive, 
             although many people feel that this is value enough. Ornamental plants are the keystone of ornamental gardening, and they come in a range of shapes, sizes and colors suitable to a broad array of climates, landscapes, and gardening needs.
             Some ornamental plants are grown for showy foliage.
            Their foliage may be deciduous, turning bright orange, red, and yellow before dropping off in the fall, or evergreen, in which case it stays green year-round. Some ornamental foliage has a striking appearance created by lacy leaves or long needles, while other ornamental are grown for distinctively colored leaves, such as silvery-gray ground covers and bright red grasses, among many others.
            Other ornamental plants are cultivated for their blooms.
        </div>
            <div class="featured">
            <h5>Featured Plants</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="lavender.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Lavender</h5>
                              <h6>Price: GH₵ 20.00 </h6>
                              <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="rosemary.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Rosemary</h5>
                              <h6>Price: GH₵ 30.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Rosemary">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="rosemary">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="fennel.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Fennel</h5>
                              <h6>Price: GH₵ 40.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Fennel">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="fennel">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="parsley.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Parsley</h5>
                              <h6>Price: GH₵ 50.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Parsley">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="parsley">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="anise.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Anise</h5>
                              <h6>Price: GH₵ 50.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Anise">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="anise">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="peppermint.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Peppermint</h5>
                              <h6>Price: GH₵ 60.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Peppermint">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="pmint">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </p>
        <!-- aromatic plants info -->
        <h4 id="list-item-2" class="type">Aromatic</h4>
        <p>
            <div class="plant-description">
            <h5>Description</h5>
            Aromatic plants are those that contain aromatic compounds – basically essential oils that are volatile at room temperature.
             These essential oils are odorous, volatile, hydrophobic and highly concentrated compounds. 
             They can be obtained from flowers, buds, seeds, leaves, twigs, bark, wood, fruits and root.
             Aromatic plants are often used as natural medicines because of their remedial and inherent pharmacological properties. 
             Looking into natural resources, particularly products of plant origin, has become an exciting area of research in drug discovery and development. Aromatic plants are mainly exploited for essential oil extraction for applications in industries, for example, in cosmetics, flavoring and fragrance, spices, pesticides, repellents and herbal beverages. 
             Although several medicinal plants have been studied to treat various conventional ailments only a handful studies are available on aromatic plants, especially for radioprotection. Many plant extracts have been reported to contain antioxidants that scavenge free radicals produced due to radiation exposure, thus imparting radioprotective efficacy.
        </div>
            <div class="featured">
            <h5>Featured Plants</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="lavender.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Lavender</h5>
                              <h6>Price: GH₵ 90.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="rosemary.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Rosemary</h5>
                              <h6>Price: GH₵ 80.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Rosemary">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="rosemaryr">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="fennel.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Fennel</h5>
                              <h6>Price: GH₵ 100.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Fennel">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="fennel">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="parsley.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Parsley</h5>
                              <h6>Price: GH₵ 70.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Parsley">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="parsley">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="anise.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Anise</h5>
                              <h6>Price: GH₵ 200.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Anise">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="anise">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="peppermint.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Peppermint</h5>
                              <h6>Price: GH₵ 25.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Peppermint">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="pmint">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
        </p>
        <!-- medicinal plants info -->
        <h4 id="list-item-3" class="type">Medicinal</h4>
        <p>
            <div class="plant-description">
            <h5>Description</h5>
            Medicinal plants are the future of medicine. Phytomedicines are coming to equal prominence with orthodox medicines worldwide. However, some medicinal plants are becoming endangered species.
             It is interesting to note that many cardioprotective principles have been found in various plants, but these compounds are not going to clinical trials and then ultimately to pharmacy.
             Medicinal plants have been the basis of treatment of various diseases in African traditional medicine as well as other forms of treatment from diverse cultures of the world. About 80% of the world’s population still depends solely on traditional or herbal medicine for treatment of diseases,
              mostly in Africa and other developing nations. Most of the potent medicinal plants have relatively no toxic or adverse effects when used by humans, while some are very toxic to both humans and animals with the potential of damaging certain organs in the body.
        </div>
        <div class="featured">
            <h5>Featured Plants</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="lavender.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Lavender</h5>
                              <h6>Price: GH₵ 250.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="rosemary.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Rosemary</h5>
                              <h6>Price: GH₵ 140.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="fennel.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Fennel</h5>
                              <h6>Price: GH₵ 300.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="parsley.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Parsley</h5>
                              <h6>Price: GH₵ 90.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="anise.jpg" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Anise</h5>
                              <h6>Price: GH₵ 90.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="row card-body">
                            <img class="col-sm-6" src="peppermint.avif" alt="sans"/>
                           <div class="col-sm-6">
                              <h5 class="card-title">Peppermint</h5>
                              <h6>Price: GH₵ 80.00</h6>
                               <p class="card-text">....</p>
                               <form action="cart.php" method="post">
              <input type="hidden" name="plantname" value="Lavender">
              <input type="submit" class="btn btn-primary" value="Add to Cart" name="lavender">
</form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        </p>
      
      
      <!--Footer-->
      <?php
        include_once("footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>