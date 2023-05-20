<?php

declare(strict_types=1);

namespace App;

use DI\Container;
use DI\ContainerBuilder;
use DI\Definition\Helper\FactoryDefinitionHelper;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

final class Dependency
{
    public readonly Container $container;

    public function __construct()
    {
        $containerBuilder = new ContainerBuilder();
        $this->container = $containerBuilder->build();
    }

    // private function getMonolog(): FactoryDefinitionHelper {
    //     return \DI\factory(function () {
    //         $logger = new Logger('post-be-php');
    
    //         $fileHandler = new StreamHandler(fopen('/tmp/app.log', 'w'), Level::Info);
    //         $fileHandler->setFormatter(new LineFormatter());
    //         $logger->pushHandler($fileHandler);
    
    //         return $logger;
    //     });
    // }
}