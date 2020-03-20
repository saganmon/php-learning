<?php

class Router
{
  protected $routes = []; // $this->routesがココに入る

  public static function load($file)
  {
    $router = new static;
    require $file;
    return $router; //staticインスタンスなので、$thisではなくrouterインスタンスを返すようにする
  }

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri)
  {
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }
    throw new Exception('No route defined for this URI.');
  }
}