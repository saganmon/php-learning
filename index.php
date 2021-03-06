<?php

require 'vendor/autoload.php'; //composerを使うときにはエントリーポイント(e.g. indexファイル)に必ず入れる！
require 'core/bootstrap.php'; //DB接続、ルーターなどの準備

use App\Core\{Router, Request};

Router::load('app/routes.php') //loadはインスタンスメソッドなのでインスタンスが必要
  ->direct(Request::uri(), Request::method());  //direct($uri, $requestType)