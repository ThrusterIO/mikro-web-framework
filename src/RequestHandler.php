<?php

namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Thruster\HttpFactory\HttpFactoryInterface;

class RequestHandler implements RequestHandlerInterface
{
    /** @var HttpFactoryInterface */
    private $httpFactory;

    public function __construct(HttpFactoryInterface $httpFactory)
    {
        $this->httpFactory = $httpFactory;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->httpFactory->response()->createResponse()
            ->withBody(
                $this->httpFactory->stream()->createStream('<h1>Hello World</h1>')
            );
    }

}
