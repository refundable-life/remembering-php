<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include("Middleware/JSONResponse.php");

include __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();

$json = fn(Request $request, Response $response, $args) => function ($text) use ($response) {
    $response->getBody()->write($text);

    return $response;
};

$app->get('/', ($json)('Hello'));

$app->run();