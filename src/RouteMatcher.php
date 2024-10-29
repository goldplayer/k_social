<?php
 namespace App;


 use mysql_xdevapi\Exception;

 class RouteMatcher{


     public function __construct(private RouteCollection $collection)
     {
         
     }


     public function match($requestUri): Route
     {

         foreach($this->collection->getAll() as $route){
            if ($route->getUri() === $requestUri){

                return $route;
            }
         }
         throw new \Exception('not fround page');
     }
 }