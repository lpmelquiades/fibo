<?php

use App\Dependency;
use App\LogicExceptionCatch;
use App\NotFoundExceptionCatch;
use App\WithHeaders;
use Fibonacci\Input\FibonacciAction;

require_once __DIR__ . '/../../vendor/autoload.php';

$dependency = new Dependency();
$app = \DI\Bridge\Slim\Bridge::create($dependency->container);
$app->addRoutingMiddleware();

$app->add(NotFoundExceptionCatch::class);

$app->add(LogicExceptionCatch::class);
$app->add(WithHeaders::class);
// $app->add(RequestResponseLogging::class);

$app->get('/fibonacci/{count}', FibonacciAction::class);

$app->run();

