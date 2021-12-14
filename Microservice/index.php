<?php
  
use Slim\Factory\AppFactory;

function Microservice(array $settings = []) {
  return fn(array $middlewares = []) => 
    /** 
     * @param Route[] 
     */
    fn(array $routes = []) => 
    function() use($middlewares, $routes) {
      $app = AppFactory::create();

      foreach ($middlewares as $middleware) {
        $app->add($middleware);
      }

      foreach ($routes as $route) {
        $app->get($route->getPath(), $route->getCallback());
      }

      $app->run();
    };
}