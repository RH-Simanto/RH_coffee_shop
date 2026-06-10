<?php

$url = "https://ztyftrvjwrlojnzrlcpw.supabase.co/rest/v1/products";

$apikey = "ztyftrvjwrlojnzrlcpw";

$headers = [
    "apikey: $apikey",
    "Authorization: Bearer $apikey",
    "Content-Type: application/json"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>
