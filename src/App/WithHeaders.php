<?php

declare(strict_types=1);

namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as ResquestHandler;

class WithHeaders implements MiddlewareInterface
{
    public function process(Request $request, ResquestHandler $handler): ResponseInterface
    {
        $response = $handler->handle($request);
        return $response->withHeader('Content-Type', 'application/json');
    }
}