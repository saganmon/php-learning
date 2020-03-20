<?php

$config = require 'config.php'; //配列で返ってくるものを格納
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
  Connection::make($config['database'])
);
