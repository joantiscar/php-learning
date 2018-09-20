<?php


require 'functions.php';


var_dump($_GET);



//String ->$greeting='Hola';

//Array/Vector
//$fruites = array();

//$fruites = [];

//Array normal
//$platan = 'platan';
//$presec = 'prèsec';
//$taronja = 'taronja';
//$fruites = [$platan, $presec, $taronja];


//Array associatiu

$persona="Joan Tiscar Verdiell";


echo $fruites[0];

$greeting= hello($_GET[who]);

require 'views/index.blade.php';