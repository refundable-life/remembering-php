<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

function ActionHandler(callable $callback, bool $isJson = true) {
  return function(Request $req, Response $res) use($callback, $isJson) {
    $res->getBody()->write($isJson ? json_encode($callback($req, $res)) : $callback($req, $res));

    if ($isJson) {
      return $res->withHeader('Content-Type', 'application/json');
    } 

    return $res;
  };
}
