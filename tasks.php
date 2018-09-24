<?php

require 'models/Task.php';

require 'framework/bootstrap.php';




$pdo = Connection::connect();


// CONSULTA SQL -> STATEMENT SQL

$tasks = Task::all();




require 'views/tasks.blade.php';

