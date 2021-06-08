<?php
require '../../vendor/autoload.php';

use BrightLocal\Api;

$api = new Api('<815b239416b43f8c23f1d78657ceb669c12a8003>', '<55f95e5ee45d0>');
$response = $api->post('/v2/lsrc/add', [
    'location-id'       => 1,
    'name'              => 'Le Bernardin',
    'schedule'          => 'Adhoc',
    'search-terms'      => 'Restaurant\nfood+nyc\ndelivery+midtown+manhattan',
    'website-addresses' => '["le-bernardin.com", "le-bernardin2.com"]',
    'search-engines'    => 'google,google-mobile,google-local,bing,bing-local'
]);
print_r($response->getResult());
