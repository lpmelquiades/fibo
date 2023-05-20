<?php

declare(strict_types=1);

namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as ResquestHandler;
use Slim\Exception\HttpNotFoundException;
use Slim\Psr7\Response;

class NotFoundExceptionCatch implements MiddlewareInterface
{
    public function process(Request $request, ResquestHandler $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (HttpNotFoundException $e) {
            $response = new Response();
            return $response->withStatus(HttpCode::NOT_FOUND_404->value);
        };
    }
}