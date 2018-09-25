<?php
/**
 * Created by PhpStorm.
 * User: dios
 * Date: 21/09/18
 * Time: 16:57
 */
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'config.php';
$routes = require './routes.php';

Router::setRoutes($routes);