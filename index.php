<?php
require "vendor/autoload.php";
date_default_timezone_set('Asia/Kolkata');
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$folder = "/logs/";
$logger->pushHandler(new StreamHandler(__DIR__.$folder.date("Y-m-d").'.log', "DEBUG"));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->debug("detailed debug information.",[
    "arr1_key"=>"arr1_value"
]);
$logger->info("interesting events.");
$logger->notice("normal but significant events.");
$logger->warning("exceptional occurrences that are not errors.");
$logger->error("runtime errors that do not require immediate action.");
$logger->critical("critical conditions.");;