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

$person = {

    'name' => 'Joan Tíscar Verdiell',
    'dni' => '482423423x',
    'mobile' => '666666666'

}


echo $fruites[0];

$greeting= hello($_GET[who]);

require 'views/index.blade.php';