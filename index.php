<?php

$query = require 'bootstrap.php';
require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

die(var_dump($tasks));

require 'index.view.php';