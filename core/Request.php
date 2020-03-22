<?php

class Request
{
  // インスタンスメソッド
  public static function uri() //uriを取り出す
  {
    return trim(
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
    );
  }

  public static function method() //methodを取り出す
  {
    return $_SERVER['REQUEST_METHOD'];
  }
}