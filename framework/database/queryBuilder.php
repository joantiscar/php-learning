<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 21/09/18
 * Time: 16:23
 */

function fetchAll($connection, $table){

    $statement = $connection->prepare("SELECT * FROM $table");


    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);

}