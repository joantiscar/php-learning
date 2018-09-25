<?php

require 'vendor/autoload.php';

require 'framework/bootstrap.php';



// FC --> Front Controller -> un sol fitxer PHP (index.php) executa tota la aplicació.

// SEMPRE s'executa primer index.php

//URI
// /tasks -> require 'views/tasks.blade.php';
// /people -> require 'views/people.blade.php';

// ROUTER per URI

// ? Com aconseguir la URI?


// DOs opcions:
// - Funció global

//$_GET o $_POST


require Router::direct($_SERVER['REQUEST_URI']);

// MVC: Model Vista Controlador




// - Metode dins d'una classe (funció dins d'una classe el eu nom tècnic es mètode)
//router = new Router();
//require $router->direct($uri);

//require Router::direct($uri);