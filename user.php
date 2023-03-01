<?php
    require_once "connexio.php";

    class User extends Connexio
    {
        public $id;
        public $nom;
        public $email;
        public $pass;
        public $imatge;

        function LoadUser()
        {
            $stmt = Connexio::connectar()->prepare("SELECT id, nom, email, pass, imatge FROM usuaris where (nom = :n or email = :n) and pass = :p");
            $stmt->bindParam(':n', $this->nom, PDO::PARAM_STR);
            $stmt->bindParam(':p', $this->pass, PDO::PARAM_STR);
            $stmt->execute();
            $e=$stmt->fetch();
            $this->id = $e["id"];
            
            return $stmt->fetch();
        }
        function logCorrecta($id)
        {
            $stmt = Connexio::connectar()->prepare("SELECT id, nom, email, imatge FROM usuaris where id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            $e=$stmt->fetch();
            $this->nom = $e["nom"];
            $this->email = $e["email"];
            $this->imatge = $e["imatge"];
            return $stmt->fetch();
        }
        function CreateUser()
        {
            $stmt = Connexio::connectar()->prepare("INSERT INTO usuaris (nom, email, pass) VALUES (:n, :e, :p)");
            $stmt->bindParam(':n', $this->nom, PDO::PARAM_STR);
            $stmt->bindParam(':e', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':p', $this->pass, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return "CORRECTE";
            } else {
                return "ERROR";
            }
        }

    }
?>