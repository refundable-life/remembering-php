<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CustomResponses {
  public function json(Request $request, Response $response, $args) {
    $response->getBody()->write('FOOBAR');

    return $response;
  }
}