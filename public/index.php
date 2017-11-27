<?php
require '../vendor/autoload.php';

$app = new \Framework\App();

$resqponse = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());

\Http\Response\send($resqponse);
