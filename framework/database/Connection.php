<?php


class Connection{
    public function connect()
    {
        try{

            return new PDO('mysql:host=127.0.0.1;dbname=php_learning', 'debian-sys-maint', '3oVPAN3HgLOQGRfG');

        }catch(\PDOException $e){
            die('could not connect' . $e);
        }
    }


}