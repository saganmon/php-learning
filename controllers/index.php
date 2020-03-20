<?php

$tasks = $app['database']->selectAll('todos');

require 'view/index.view.php';