<?php




$pdo = Connection::connect();


// CONSULTA SQL -> STATEMENT SQL

$lessons = Lesson::all();




require 'views/lessons.blade.php';