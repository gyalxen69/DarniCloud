<?php
include "header.php";
include "user.php";
$correcta = false;
if (isset($_POST["log"])) {
  $arrayUser = new User();
  $arrayUser->nom = $_POST["email"];
  $arrayUser->pass = $_POST["pass"];
  //Comprova si la consulta retorna que i es o no
  if ($arrayUser->LoadUser()) {
    ?>
    <br><br><div class="alert alert-danger" role="alert">
        Contrasenya incorrecta!, Tornau a intantar
    </div>
<?php
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
        include "header.php";
        //Comprova password correcta desencriptant
    }else{
        echo 'Has olvidado poner tu nombre';
    }
  }
  //-----------------------------------------------------
}
?>
