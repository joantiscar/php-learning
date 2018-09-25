<?php





$pdo = Connection::connect();

// CONSULTA SQL -> STATEMENT SQL

$people= Person::all();




require 'views/people.blade.php';
