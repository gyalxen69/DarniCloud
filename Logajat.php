<?php
  include "header.php";
  include "user.php";
  session_start();
    if (isset($_SESSION["log"])) {
        $log = $_SESSION["log"];
        $arrayLog = new User();
        $arrayLog->logCorrecta($log);
        $_SESSION["logCorrecta1"] = $arrayLog->nom;
        $_SESSION["logCorrecta2"] = $arrayLog->email;
        $_SESSION["logCorrecta3"] = $arrayLog->imatge;
        var_dump($arrayLog);
    }else{
        echo 'Has olvidado poner tu nombre';
    }
?>
