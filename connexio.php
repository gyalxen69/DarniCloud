<?php
    class Connexio{
        public function connectar(){
            $link = pg_connect("host=192.168.1.10 port=5432 dbname=darnicloud user=darni password=salle");
            return $link;
        }
    }

    //find code to connect php to postgres database.
?>