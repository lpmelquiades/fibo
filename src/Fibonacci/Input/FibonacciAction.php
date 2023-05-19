<?php

declare(strict_types=1);

namespace Fibonacci\Input;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class FibonacciAction
{
    public function __construct(
    ){
    }

    public function __invoke(Request $request, Response $response, $count)
    {
        $response->getBody()->write(json_encode(['result' => 123]));
        return $response;
    }
}