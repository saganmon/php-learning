<?php

$tasks = $database->selectAll('todos');

require 'view/index.view.php';