<?php

namespace App;

class Route{


    public function __construct(
        private string $method,
        private string $uri,
        private string $class,
        private string $classMethod
    )
    {
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getClassMethod(): string
    {
        return $this->classMethod;
    }





}