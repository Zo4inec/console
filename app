<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application('console');

$app->add(new \App\CommandThree());

$app->run();