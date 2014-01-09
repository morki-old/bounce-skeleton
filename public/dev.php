<?php

require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/../kernel.php';

Kernel::handleRequest('dev', true);