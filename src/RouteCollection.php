<?php
namespace App;

class RouteCollection{
    private array $routes = [];


    public function add(Route $route): self
    {
        $this->routes[] = $route;

        return $this;
    }

    /*
     *  @return array|Route[]
     */
    public function getAll(): array
    {
        return $this->routes;
    }
}