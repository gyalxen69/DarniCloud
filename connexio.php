<?php
    class Connexio{
        public function connectar(){
            // $link = new PDO("pgsql:host=192.168.194.30; port=5432; dbname=darnicloud, user=darni, password=salle");
            try{
                $link = new PDO("pgsql:host=192.168.194.30; port=5432; dbname=darnicloud, user=darni, password=salle");
                return $link;
            }
            catch(PDOException $i){
                echo"ERROR".$i->getMessage();
            }
        }
    }

    //find code to connect php to postgres database.
?>