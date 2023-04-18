<?php
if (isset($_SESSION["logCorrecta1"])) {
  $nom = $_SESSION["logCorrecta1"];
  $email = $_SESSION["logCorrecta2"];
  $imatge = $_SESSION["logCorrecta3"];
  $pass = $_SESSION["logCorrecta4"];
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
            <form id="divbutton">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              <button id="logout" type="submit" class="btn btn-outline-danger" name="logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"></path>
                </svg>
              </button>
            </form>
            <?php
            if (isset($_GET["logout"])) {
              session_unset();
              header("windwos.location:index.php");
            }
            ?>
          </div>
          <?php
          if (isset($_SESSION["logCorrecta1"])) {
          ?>
            <div class="card; border:none;" id="fotolog">
              <img class="card-img-top" src="<?php echo $imatge; ?>" style="height: 15vh; width: 10vw; border-radius: 50%; border:none;">
              <div class="d-flex flex-column">
                <h3><?php echo $nom; ?></h3>
                <h4><?php echo $email; ?></h4>
              <?php
            } else {
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
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                      <li class="nav-item p-2">
                        <a class="nav-link barraL" aria-current="page" href="http://localhost/M09UF2/DarniCloud/overview.php">Overview</a>
                      </li>
                      <li class="nav-item p-2">
                        <a class="nav-link barraL" href="#">Download</a>
                      </li>
                      <li class="nav-item p-2">
                        <a class="nav-link barraL" href="#">Preu</a>
                      </li>
                    </ul>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-5 d-grid gap-2">
                      <button onclick="location.href = 'signup.php'" class="btn btn-primary" name="signin">Sign up</button>
                    </div>
                    <div class="col-5 d-grid gap-2">
                      <button onclick="location.href = 'login.php'" class="btn btn-danger" name="login">Login</button>
                    </div>
                  </div>
                </div>
    </nav>
  </header>