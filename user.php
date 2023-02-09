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

        function LoadUser($nom, $pass)
        {
            $stmt = pg_query(Connexio::connectar(),"SELECT id, nom, email, pass FROM usuaris where nom = :n or email = :n and pass = :p ");
            // $stmt->bindParam(':n', $nom, PDO::PARAM_STR);
            // $stmt->bindParam(':p', $pass, PDO::PARAM_STR);
            $result = pg_fetch_all($stmt);
            return $result;
        }

    }
?>