<?php

use App\Kernel;
use Symfony\Component\Debug\Debug;
use Thruster\SapiBridge\SapiBridge;

require dirname(__DIR__) . '/config/bootstrap.php';

if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

SapiBridge::createFromGlobals()
    ->attach($kernel)
    ->run();
