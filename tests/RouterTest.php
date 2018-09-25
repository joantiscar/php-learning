<?php

use PHPUnit\Framework\TestCase;




class RouterTest extends TestCase
{

        public function testRouteClass(){

            //1 Preparar


            //2 Executar
            $path = Router::direct();
            var_dump($path);

            //3 Comprovar

            $this->assertEquals($path, 'controllers/tasks.php');



    }


        public function test_check_returns_tasks_when_uri_is_tasks(){

            Router::setRoutes(['/tasks' => 'controllers/tasks.php']);


            $path = Router::direct('/tasks');

            $this->assertEquals($path, 'controllers/tasks.php');



        }
        public function test_check_returns_tasks_when_uri_is_bad()
        {


            try {
                $path = Router::direct('/taskasfasfasfass');
            } catch (Exception $e) {
                $this->assertTrue(true);
            }
        }

        public function test_can_define_routes(){
                //1 Prepare
            $routes = [
                '/' => 'controllers/tasks.php',
                '/tasks' => 'controllers/tasks.php',
                '/people' => 'controllers/people.php',
                '/lessons' => 'controllers/lessons.php',
                '/about' => 'controllers/about.php',
                '/contact' => 'controllers/contact.php'

            ];



            //2
            Router::setRoutes($routes);


        //3

            $this->assertEquals($routes,Router::getRoutes());




    }


}