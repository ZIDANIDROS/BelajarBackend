<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('HuseinZidan');
$log->pushHandler(new StreamHandler('PHP/Composer/application.log',Logger::INFO));

$log->info('Hello World');
$log->info('Selamat Belajar Monolog PHP');

