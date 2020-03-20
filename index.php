<?php

require 'core/bootstrap.php';

require Router::load('routes.php') //loadはインスタンスメソッドなのでインスタンスが必要
  ->direct(Request::uri());