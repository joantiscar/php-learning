<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 25/09/18
 * Time: 19:16
 */

class Router
{
    private static $routes;

     public static function setRoutes($routes)
    {
        self::$routes=$routes;
    }

    public static function getRoutes(){

         return self::$routes;


    }



//    private static $routes = [
//        '/' => 'controllers/tasks.php',
//        '/tasks' => 'controllers/tasks.php',
//        '/people' => 'controllers/people.php',
//        '/lessons' => 'controllers/lessons.php',
//        '/about' => 'controllers/about.php',
//        '/contact' => 'controllers/contact.php'
//
//    ];

    public static function direct($uri = null){

        if (!$uri) {
            return 'controllers/tasks.php';
        }




        if(array_key_exists($uri, self::$routes )) return self::$routes [$uri];

        if(!array_key_exists($uri, self::$routes )) throw new Exception('La pagina que busques no existeix');




    }
}