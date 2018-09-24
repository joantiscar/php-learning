<?php

require 'models/Lesson.php';
require 'framework/database/Connection.php';
require 'framework/database/QueryBuilder.php';



$pdo = Connection::connect();


// CONSULTA SQL -> STATEMENT SQL

$lessons = QueryBuilder::fetchAll($pdo,'lessons');




require 'views/lessons.blade.php';


