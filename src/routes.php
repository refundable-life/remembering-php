<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include(__DIR__."/../Microservice/Route.php");

$routes = array(
  new Route('get', '/', function(Request $req, Response $res) {
    $res->getBody()->write('Hi World');
    return $res;
  }) 
);