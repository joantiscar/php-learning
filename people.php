<?php

require 'models/Person.php';
require 'framework/database/Connection.php';
require 'framework/database/QueryBuilder.php';



$pdo = Connection::connect();


// CONSULTA SQL -> STATEMENT SQL

$people = QueryBuilder::fetchAll($pdo,'people');




require 'views/people.blade.php';
