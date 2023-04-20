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
            $stmt = Connexio::connectar()->prepare("SELECT id, nom, email, pass, imatge FROM usuaris where nom = :n or email = :n");
            $stmt->bindParam(':n', $this->nom, PDO::PARAM_STR);
            //$stmt->bindParam(':p', $this->pass, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch();
            $this->id = $data["id"];
            if(password_verify( $this->pass , $data["pass"])){
                echo "Correcta";
            }
            else{
                return false;
            }
            
        }
        function logCorrecta($id)
        {
            $stmt = Connexio::connectar()->prepare("SELECT id, nom, email, imatge, pass FROM usuaris where id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch();
            $this->nom = $data["nom"];
            $this->email = $data["email"];
            $this->imatge = $data["imatge"];
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