<?php

require_once __DIR__ . '/vendor/autoload.php';
ini_set('date.timezone', 'US/Eastern');

use Example\Starfleet\Captain;
use Example\Log\Console;
use Example\Log\File;

// logs to console
$kirk = new Captain();

// logs to file
$picard = new Captain();

echo "Kirk says: {$kirk->issueCommand()}\n";
echo "Picard says: {$picard->issueCommand()}\n";
