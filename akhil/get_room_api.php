<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://availability.integration2.testaroom.com/api/version/properties/property_id/room_availability?check_in=02/13/2018&check_out=02/17/2018&nights=3&api_key=1dced784-f3ab-5f10-9c71-bb46eaaa8a6c&auth_token=d63a37a2-221c-576d-b1d5-fbe81d866043");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Accept-Encoding: gzip"
));

$response = curl_exec($ch);
curl_close($ch);

echo "<pre>"; print_r(json_decode($response, true)); die;

var_dump($response);

