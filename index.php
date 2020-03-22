<?php

require 'core/bootstrap.php'; //DB接続、ルーターなどの準備

require Router::load('routes.php') //loadはインスタンスメソッドなのでインスタンスが必要
  ->direct(Request::uri(), Request::method());  //direct($uri, $requestType)