<?php
  session_start();
  if(isset($_SESSION["logCorrecta1"])){
      $nom = $_SESSION["logCorrecta1"];
      $email = $_SESSION["logCorrecta2"];
      $imatge = $_SESSION["logCorrecta3"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>DarniCloud</title>
</head>
<body>
  <header>
    <nav class="navbar fixed-top" style="background-color: #1299F3; padding:0">
      <div class="container-fluid">
        <a href="index.php">
          <img src="./imgs/logo4.png" alt="DarniCloud">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Aquest div es el que done color a la nav bar del deslpagable -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
  <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"></path>
    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"></path>
</svg>
                Button
 </button>
          </div> <?php
          if(isset($_SESSION["logCorrecta1"])){
           ?>   
          <div class="card; border:none;" id="fotolog">
            <img class="card-img-top" src="<?php echo $imatge; ?>" style="height: 15vh; width: 10vw; border-radius: 50%; border:none;">
            <div class="d-flex flex-column">
              <h3><?php echo $nom; ?></h3>
              <h4><?php echo $email; ?></h4>
              <?php
            }
            else{
              ?>
              <div class="card; border:none;" id="fotolog">
                <img class="card-img-top" src="./imgs/user.png" style="height: 15vh; width: 10vw; border-radius: 50%; border:none;">
                <div class="d-flex flex-column">
              <h3>User</h3>
              <h4>correu@gmail.com</h4>
              <?php
            }
            ?>
              
            </div>
          </div>
          <!-- ----------------------------------------------------- -->
          <div class="card-body">
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active barraL" aria-current="page" href="http://localhost/M09UF2/DarniCloud/overview.php">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active barraL"  href="#">Download</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active barraL" href="#">Preu</a>
                </li>
                <li class="nav-item">
                  <form>
                    <button class="btn btn-primary" name="signin">Sign in</button>
                    <button class="btn btn-danger" name="login">Login</button>
                  </form>
                </li>
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>
  </header>