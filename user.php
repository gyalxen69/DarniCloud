<?php
    require_once "connexio.php";

    class User extends Connexio
    {
        public $id;
        public $nom;
        public $email;
        public $pass;

        function __construct()
        {
            
        }

        function LoadUser()
        {
            $stmt = Connexio::connectar()->prepare("SELECT id, nom, email, pass FROM usuaris where nom = :n or email = :n and pass = :p ");
            $stmt->bindParam(':n', $this->nom, PDO::PARAM_STR);
            $stmt->bindParam(':p', $this->pass, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt -> fetch();
        }
        function CreateUser()
        {
            $stmt = Connexio::connectar()->prepare("INSERT INTO usuaris (nom, email, pass) VALUES (:n, :e, :p)");
            $stmt->bindParam(':n', $this->nom, PDO::PARAM_STR);
            $stmt->bindParam(':e', $this->nom, PDO::PARAM_STR);
            $stmt->bindParam(':p', $this->pass, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return "CORRECTE";
            } else {
                return "ERROR";
            }
        }

    }
?>