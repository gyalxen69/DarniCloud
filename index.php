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
  <header style="background-color: #1299F3">
  <a href="#">
      <img src="./imgs/logo4.png" alt="DarniCloud">
</a>
  </header>
  <br>
  <form>
    <div class="text-center">
      <input type="submit" name="select" class="btn btn-outline-info">
    </div>
  </form>
  <?php
  if (isset($_GET["select"])) {
    $arrayUser = new User();
    $users = $arrayUser->LoadUser();
    var_dump($users);
  }


  ?>
</body>

</html>