<?php

require_once __DIR__ . '/vendor/autoload.php';
ini_set('date.timezone', 'US/Eastern');

use Example\Starfleet\Captain;


$kirk = new Captain();

echo $kirk->issueCommand() . "\n";
