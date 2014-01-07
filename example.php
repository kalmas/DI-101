<?php

require_once __DIR__ . '/vendor/autoload.php';

use Example\Starfleet\Captain;


$kirk = new Captain();

echo $kirk->issueCommand() . "\n";
