<?php
ini_set('date.timezone', 'US/Eastern');
ini_set('display_errors', "1");

require_once __DIR__ . '/vendor/autoload.php';
use Example\Starfleet\Captain;


$kirk = new Captain();

echo $kirk->issueCommand() . "\n";
