<?php
require '../../vendor/autoload.php';

use BrightLocal\Api;

$batchId = '1';
$api = new Api('<YOUR_API_KEY>', '<YOUR_API_SECRET>');
$batch = $api->getBatch($batchId);
$response = $batch->getResults();
print_r($response->getResult());
