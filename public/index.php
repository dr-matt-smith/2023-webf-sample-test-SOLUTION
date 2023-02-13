<?php
// ---- highest level of in-your-face error reporting --
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Application;
$app = new Application();
$app->run();