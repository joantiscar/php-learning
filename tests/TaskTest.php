<?php

use PHPUnit\Framework\TestCase;
require '../models/Task.php';



class TaskTest extends TestCase
{
    public function testTaskClas()
    {




        }

    public function can_create_a_task_with_a_name()
    {
        $task = new Task('Comprar pa');


        //Propietats
        $this->assertEquals('Comprar pa',$task->name);

        }
    public function test_can_create_a_task_with_an_status()
    {
        $task = new Task('Comprar pa', false);


        //Propietats
        $this->assertEquals('Comprar pa',$task->name);
        $this->assertEquals(false,$task->completed);

    }

    public function test_can_complete_a_task()
    {
        $task = new Task('Comprar pa', false);

        $task->complete();

        $this->assertEquals(true,$task->completed);




    }
}