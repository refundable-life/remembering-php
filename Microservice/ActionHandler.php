<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

function ActionHandler(callable $callback) {
  return function(Request $req, Response $res) use($callback) {
    $callback($req, $res);
    return $res;
  };
}
