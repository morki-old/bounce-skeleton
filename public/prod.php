<?php

$loader = require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/../kernel.php';

Kernel::enableAPC('name_of_app', $loader);
Kernel::handleRequest('prod', false);