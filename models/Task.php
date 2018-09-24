<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 20/09/18
 * Time: 19:38
 */

class Task
{
    // CONSTRUCTOR
    public $name;
    public $completed;
    /**
     * Task constructor.
     * @param $name
     */
    public function __construct($name, $completed)
    {
        $this->name = $name;
        $this->completed = $completed;
    }

    // Encapsular
    public function complete()
    {
        $this->completed = true;
    }

    public static function all(){
        $pdo = Connection::connect();
        return QueryBuilder::fetchALl($pdo, 'tasks');


    }
}