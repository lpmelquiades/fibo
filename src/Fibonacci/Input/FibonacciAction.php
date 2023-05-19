<?php

declare(strict_types=1);

namespace Fibonacci\Input;

use Fibonacci\Command\CountFibonacci;
use Fibonacci\Command\CountFibonacciHandler;
use Fibonacci\CommandModel\UnsignedNumber;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class FibonacciAction
{
    public function __construct(
    ){
    }

    public function __invoke(Request $request, Response $response, int $count)
    {
        $command = new CountFibonacci(new UnsignedNumber($count));
        $h =  new CountFibonacciHandler();
        $response->getBody()->write(
            json_encode(['result' => $h->handle($command)->result->readable()])
        );
        return $response;
    }
}