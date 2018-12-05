<?php

namespace Towersystems\Resource\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\EmptyResponse;

class EmptyResponseHandler implements RequestHandlerInterface {

	public function handle(ServerRequestInterface $request): ResponseInterface {
		return new EmptyResponse();
	}
}