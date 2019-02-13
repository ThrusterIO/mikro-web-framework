<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Psr\Http\Server\RequestHandlerInterface;
use App\RequestHandler;

return function (ContainerConfigurator $container) {
    $services = $container->services();

    $container = $services
        ->defaults()
        ->autoconfigure()
        ->autowire();

    $container->set(RequestHandlerInterface::class, RequestHandler::class)
        ->alias('request_handler', RequestHandlerInterface::class);
};
