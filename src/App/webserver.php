<?php

use App\Dependency;
use Fibonacci\Input\FibonacciAction;

require_once __DIR__ . '/../../vendor/autoload.php';

$dependency = new Dependency();
$app = \DI\Bridge\Slim\Bridge::create($dependency->container);
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);


// $app->add(NotFoundExceptionCatch::class);
// $app->add(RequestResponseLogging::class);

$app->get('/fibonacci/{count}', FibonacciAction::class);

$app->run();
