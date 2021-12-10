<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
    <!--NavBar-->
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
                  <li><a class="dropdown-item" href="plants.php">Ornamental</a></li>
                  <li><a class="dropdown-item" href="plants.php">Aromatic</a></li>
                  <li><a class="dropdown-item" href="plants.php">Medicinal</a></li>
                </ul>
              </li>
            </ul>
            <div class="logout">
              <form action="signout.php">
              <input type="submit" class="btn btn-outline-danger" value="Log Out">
              </form>
              
            </div>
            
          </div>
        </div>
      </nav>
    </header>
</body>
</html>