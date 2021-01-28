<?php
require '../../vendor/autoload.php';

use BrightLocal\Api;

$api = new Api('<YOUR_API_KEY>', '<YOUR_API_SECRET>');
$response = $api->delete('/v4/lscu', [
    'report-id' => 860
]);
var_dump($response->getResult());
if (!empty($response->getResult()['success'])) {
    echo 'Successfully deleted report.' . PHP_EOL;
}
