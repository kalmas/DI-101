<?php
ini_set('date.timezone', 'US/Eastern');

require_once __DIR__ . '/vendor/autoload.php';

use Example\Starfleet\Captain;
use Example\Log\Console;
use Example\Log\File;

// Brash and heroic, logs to console
$kirk = new Captain(new Console());

// Eloquent and intellectual, logs to file
$picard = new Captain(new File());

echo "Kirk says: {$kirk->issueCommand()}\n";
echo "Picard says: {$picard->issueCommand()}\n";
