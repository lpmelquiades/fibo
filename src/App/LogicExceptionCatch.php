<?php

declare(strict_types=1);

namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as ResquestHandler;
use Slim\Psr7\Response;

class LogicExceptionCatch implements MiddlewareInterface
{
    public function process(Request $request, ResquestHandler $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (\LogicException $e) {
            $response = new Response();
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(HttpCode::BAD_REQUEST_400->value);
        } catch (\Exception $e) {
            $response = new Response();
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(HttpCode::INTERNAL_SERVER_ERROR_500->value);
        }
    }
}