<?php

$url = 'https://randomuser.me/api/';

$params = [
    'results' => 3,
    'nat' => 'ch',
    'inc' => 'name,location',
    'noinfo' => '',
];

$headers = [
    'Accept: application/json',
];

$url .= '?' . http_build_query($params);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);

$response = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($response === false || $code !== 200) {
    echo 'error ' . $code . ' ' . curl_error($curl) . PHP_EOL;
    exit(1);
}

$people = json_decode($response, true)['results'];
echo 'Got ' . count($people) . ' entries ...' . PHP_EOL;
// Show the json response array to find the keys or RTFM ;)
// print_r($people);

foreach ($people as $person) {
    print PHP_EOL;
    printf('%s %s' . PHP_EOL, $person['name']['first'], $person['name']['last']);
    printf('%s %s' . PHP_EOL, $person['location']['postcode'], $person['location']['city']);
}
