<?php
include "user.php";
$correcta = false;
if (isset($_POST["log"])) {
  $arrayUser = new User();
  $arrayUser->nom = $_POST["email"];
  $arrayUser->pass = $_POST["pass"];
  //Comprova si la consulta retorna que i es o no
  if (!$arrayUser->LoadUser()) {
    echo 'Bad';
  } else {
    $correcta = true;
    session_start();
    $_SESSION["log"] = $arrayUser->id;
    echo 'GOOD JOB MY FRIEND';
    if (isset($_SESSION["log"])) {
        $arrayLog = new User();
        $arrayLog->logCorrecta($_SESSION["log"]);
        $_SESSION["logCorrecta1"] = $arrayLog->nom;
        $_SESSION["logCorrecta2"] = $arrayLog->email;
        $_SESSION["logCorrecta3"] = $arrayLog->imatge;
        $_SESSION["logCorrecta4"] = $arrayLog->pass;
        var_dump($arrayUser);
        include "header.php";
    }else{
        echo 'Has olvidado poner tu nombre';
    }
  }
  //-----------------------------------------------------
}
?>
