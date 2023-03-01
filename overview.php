<?php include "user.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
  <div id="overviewpage">
    <section class="prova">
      <h1>Sóm DarniCloud</h1>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia in ante nec facilisis. Suspendisse non magna quis libero varius aliquam. Proin mi quam, lobortis in mauris non, fermentum sollicitudin augue. Curabitur dapibus sodales nisl, eu tempus mauris porta eu. In sollicitudin id tortor vel sodales. Etiam gravida nisl ac eros laoreet condimentum. Nulla fermentum nibh et nibh tincidunt ullamcorper. In hac habitasse platea dictumst. Sed in nisi sapien. Nulla et laoreet ligula. Phasellus tincidunt auctor commodo. Duis placerat mauris non ante mattis tristique.

Suspendisse quis urna elementum, elementum libero eget, mattis sapien. Curabitur feugiat feugiat metus. <br><br>

Quisque ultricies ligula ac malesuada fermentum. Etiam dictum tristique leo, sed viverra mi placerat nec. Integer nunc est, luctus fermentum lectus sit amet, elementum posuere felis. Vivamus eu felis hendrerit, efficitur nulla eget, consequat purus. Donec aliquet imperdiet libero. In quis aliquam purus. Donec sit amet iaculis augue. Proin egestas orci nunc. Phasellus id arcu lorem. Suspendisse potenti. Donec at convallis leo, id maximus urna. Ut congue eros id ante accumsan mattis.

In vel aliquam magna. Nulla ac augue sed justo eleifend mollis. Fusce id semper libero, imperdiet euismod lacus. Sed eu nisl hendrerit magna pulvinar laoreet. Etiam facilisis diam in arcu volutpat lobortis. Fusce faucibus blandit faucibus. Donec vitae tincidunt eros.

Donec non semper sem, in vehicula leo. Quisque molestie interdum commodo. Nulla vitae suscipit tellus, lacinia gravida tellus. Vivamus suscipit, magna sit amet vestibulum efficitur, elit felis pulvinar diam, non vulputate enim ipsum ut velit. Nunc vel augue maximus, molestie ante at, vulputate neque. Sed a dui mollis, viverra orci tristique, dapibus neque. Sed rutrum blandit enim, non convallis ante lacinia et. Praesent sit amet magna vitae lacus egestas pulvinar. Aliquam eget massa vestibulum, feugiat libero ac, luctus augue. Duis congue nibh eget sapien aliquet, eget consequat neque euismod. Proin consequat ligula id eleifend tempor. Integer massa metus, tincidunt ut bibendum sit amet, gravida non ipsum. Phasellus et consectetur tellus, et consectetur diam. Praesent sit amet sem ante.

Fusce rutrum sagittis quam at eleifend. Aliquam ac tellus sed risus porttitor efficitur. <br><br>

Cras iaculis euismod imperdiet. Curabitur non justo mattis, tempor eros nec, laoreet tellus. Proin porttitor nisl non vestibulum sagittis. Nunc facilisis cursus neque ac aliquam. Morbi eu convallis dui. Morbi luctus odio dolor, et elementum libero luctus ut. Praesent eget sem ac tellus sodales molestie. Vestibulum a eleifend purus, sed ultrices odio. Sed euismod elit at risus vulputate, non faucibus sem tincidunt. Praesent sagittis fermentum enim, sed hendrerit diam hendrerit in. Nulla in rhoncus diam, et efficitur dui. Donec nec arcu lacinia, euismod turpis non, volutpat sem. Maecenas vitae tincidunt purus, ac pretium ligula. Proin eget mi elit.

Nulla ante neque, maximus sed massa nec, lobortis facilisis est. Vivamus nec ornare ante, sit amet dapibus nibh. Donec convallis est tellus, sed eleifend enim gravida quis. Pellentesque aliquam libero sapien, in varius lorem aliquet ut. Aenean lacinia sed diam in fringilla. Pellentesque scelerisque purus posuere, venenatis turpis quis, finibus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dignissim sagittis arcu ut ornare.

Nunc quis fringilla quam, vitae lobortis quam.
    </section>
    </div>
    <footer class="footercss">
      <div id="div1"></div>
      <div id="div2"></div>
      <div id="div3">©Tots els drets resevats |DarniCloud|©</div>
    </footer>
  <?php
  // 
  if (isset($_GET["signin"])) {
    echo '
    <form>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-image:url('.'imgs/nuvols.png'.'); background-repeat: no-repeat; background-size: cover;">
    <section class="rounded-5 p-5 border border-3 border-dark" style="width: 40%;">
    <h1 style="text-align:center">Sign In</h1>
    <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label class="form-label">User Name</label>
    <input type="text" class="form-control" name="nom" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-primary" name="registre" type="submit">Sign In</button>
    </div>
    </section>
    </div>
    <input type="hidden" name="signin">
    </form>';
    if(isset($_GET["registre"])){
      $arrayUser = new User();
      $arrayUser -> nom = $_GET["nom"];
      $arrayUser -> email = $_GET["email"];
      $arrayUser -> pass = $_GET["pass"];
      $arrayUser->CreateUser();
      }
  }
  if(isset($_GET["login"]))
  {
    echo '
    <form>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-image:url('.'imgs/nuvols.png'.'); background-repeat: no-repeat; background-size: cover;">
    <section class="rounded-5 p-5 border border-3 border-dark" style="width: 40%;">
    <h1 style="text-align:center">Log In</h1>
    <div class="mb-3">
    <label class="form-label">User Name</label>
    <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control">
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-primary" type="submit" name="log">Log in</button>
    </div>
    </section>
    </div>
    <input type="hidden" name="login">
    </form>';
    if(isset($_GET["log"])){
    $arrayUser = new User();
    $arrayUser -> nom = $_GET["email"];
    $arrayUser -> pass = $_GET["pass"];
    $arrayUser->LoadUser();

    //Comprova si la consulta retorna que i es o no
    if(!$arrayUser->LoadUser()){
      echo 'Bad';
    }
    else{
      echo 'GOOD JOB MY FRIEND';
    }
  //-----------------------------------------------------
    }
  }
  ?>
</body>
</html>