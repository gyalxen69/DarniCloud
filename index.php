  <?php
  include "user.php";
  include "header.php";
  if (isset($_GET["signin"])) {
    echo '
    <form>
    <div id="siginlogin">
    <section id="siginsec" class="rounded-5 p-5 border border-3 border-dark">
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
    if (isset($_GET["registre"])) {
      $arrayUser = new User();
      $arrayUser->nom = $_GET["nom"];
      $arrayUser->email = $_GET["email"];
      $arrayUser->pass = $_GET["pass"];
      $arrayUser->CreateUser();
    }
  }
  if (isset($_GET["login"])) {
    echo '
    <form action="Logajat.php" method="post">
    <div  id="siginlogin">
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
    
  }
  ?>
  