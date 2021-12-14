<?php

include(__DIR__."/../Microservice/Route.php");
include(__DIR__."/../Microservice/ActionHandler.php");

include(__DIR__."/Actions/TestAction.php");

$routes = array(
  new Route('get', '/', ActionHandler($TestAction)) 
);
