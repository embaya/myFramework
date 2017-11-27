<?php
/**
 * Created by PhpStorm.
 * User: macmini
 * Date: 27/11/2017
 * Time: 16:54
 */

namespace Framework;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App
{

    public function run(ServerRequestInterface $request): ResponseInterface
    {
        $uri = $request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] === "/") {
            $response = (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
            return $response;
        }
        $response = new Response();
        $response->getBody()->write('Bonjour');
        return $response;
    }
}
