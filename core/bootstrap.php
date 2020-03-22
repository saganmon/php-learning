<?php

App::bind('config', require 'config.php'); //requireで配列を提供している

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));
