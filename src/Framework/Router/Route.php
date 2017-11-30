<?php
/**
 * Created by PhpStorm.
 * User: macmini
 * Date: 28/11/2017
 * Time: 11:07
 */

namespace Framework\Router;

/**
 * Class Route
 * Reprsent a matched route
 */
class Route
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var callable
     */
    private $callback;
    /**
     * @var array
     */
    private $parameters;

    /**
     * Route constructor.
     */
    public function __construct(string $name, callable $callback, array $parameters)
    {
        $this->name = $name;
        $this->callback = $callback;
        $this->parameters = $parameters;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return callable
     */
    public function getCallback(): callable
    {
        return $this->callback;
    }

    /**
     * Retrieve The Url Parameters
     * @return string[]
     */
    public function getParams(): array
    {
        return $this->parameters;
    }
}