<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 20/09/18
 * Time: 19:39
 */
//require 'models/Task.php';
//
//
//new Task();
require 'models/Task.php';
$tasks = [
    new Task('Comprar llet', false),
    new Task('Comprar pa', true),
    new Task('Comprar aigua', false),
    new Task('Practicar PHP', true)
];
require 'views/tasks.blade.php';


