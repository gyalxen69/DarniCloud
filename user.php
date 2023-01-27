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
            $stmt = pg_query(Connexio::connectar(),"SELECT id, nom, email, pass FROM usuaris");
            //$stmt->bindParam(":a", $id, PDO::PARAM_STR);
            $result = pg_fetch_all($stmt);
            return $result;
        }

    }
?>