<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 20/09/18
 * Time: 19:38
 */

class Person
{
    // CONSTRUCTOR
    public $name;
    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function all(){
        $pdo = Connection::connect();
        return QueryBuilder::fetchALl($pdo, 'people');


    }
}