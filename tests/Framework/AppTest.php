<?php

namespace Tests\Framework;

use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class Apptest extends TestCase{

    public function testRedirectionTrailingSlash(){

        $app = new App();
        $request =  new ServerRequest('GET','/dddffdf/');
        $response = $app->run($request);
        $this->assertContains('/dddffdf', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }
}