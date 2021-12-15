<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$TestAction = function (Request $req, Response $res) {
  return array(
    'one' => 'OneValue',
    'two' => 'TwoValue',
    'three' => 'ThreeValue'
  );
};
