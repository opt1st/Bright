<?php
require '../../vendor/autoload.php';

use BrightLocal\Api;

$api = new Api('<815b239416b43f8c23f1d78657ceb669c12a8003>', '<55f95e5ee45d0>');
$response = $api->get('/v2/lsrc/get', [
    'campaign-id' => 50
]);
print_r($response->getResult());
