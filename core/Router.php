<?php

class Router
{
  // 属性
  public $routes = [
    'GET' => [],
    'POST' => []
  ];

  //インスタンスメソッド
  public static function load($file) //routes.phpの読み込み
  {
    $router = new static;
    require $file;
    return $router; //staticインスタンスなので、$thisではなくrouterインスタンスを返すようにする
  }

  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri, $requestType)
  {
    if (array_key_exists($uri, $this->routes[$requestType])) {
      return $this->routes[$requestType][$uri];
    }
    throw new Exception('No route defined for this URI.');
  }
}