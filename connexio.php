<?php
    class Connexio{
        public function connectar(){
            try{
                $user = "darni";
                $password = "salle";
                $link = new PDO("pgsql:host=192.168.194.30; port=5432; dbname=darnicloud",$user, $password);
                return $link;
            }
            catch(PDOException $i){
                echo"ERROR".$i->getMessage();
            }
        }
    }
    //find code to connect php to postgres database.
?>