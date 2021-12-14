<?php

include __DIR__.'/../vendor/autoload.php';

include(__DIR__."/../Microservice/index.php");

include('middleware.php');
include('routes.php');

Microservice()($middleware)($routes)();