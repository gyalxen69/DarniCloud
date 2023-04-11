<?php
  include "user.php";
  include "header.php";
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
  
  include "footer.php";