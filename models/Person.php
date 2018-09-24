<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 21/09/18
 * Time: 15:49
 */

class Person{

    public $name;
    public $DNI;

    public function __construct($name, $DNI)
    {
        $this->name = $name;
        $this->DNI = $DNI;
    }

}
