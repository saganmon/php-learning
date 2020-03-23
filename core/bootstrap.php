<?php

use App\Core\App;

App::bind('config', require 'config.php'); //requireで配列を提供している

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
  extract($data); //extractで配列から変数を作成
  return require "app/views/{$name}.view.php";
}

function redirect($path)
{
  header("Location: /{$path}");
}