<?php include "user.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>DarniCloud</title>
</head>
<body>
  <header >

<nav class="navbar fixed-top" style="background-color: #1299F3; padding:0">
  <div class="container-fluid">
  <a href="index.php">
      <img src="./imgs/logo4.png" alt="DarniCloud">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Aquest div es el que done color a la nav bar del deslpagable -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/M09UF2/DarniCloud/overview.php">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Preu</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary">Sign in</button>
            <button class="btn btn-danger">Login</button>
          </li>
          <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  </header>
  <?php
  if (isset($_GET["select"])) {
    // $arrayUser = new User();
    // $users = $arrayUser->LoadUser();
    // var_dump($users);
  }


  ?>
</body>

</html>