<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$TestAction = function (Request $req, Response $res) {
  $res->getBody()->write('Home Page');
};
