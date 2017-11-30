<?php
/**
 * Created by PhpStorm.
 * User: macmini
 * Date: 28/11/2017
 * Time: 15:48
 */

namespace App\Blog;

use Framework\Router;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BlogModule{

    /**
     * BlogModule constructor.
     */
    public function __construct(Router $router)
    {
        $router->get('/blog', [$this, 'index'], 'blog.index');
        $router->get('/blog/{slug}', [$this, 'show'], 'blog.show');
    }

    public function index(ServerRequestInterface $request): Response{

    }
}