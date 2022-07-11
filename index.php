<?php

// Encode Key ID
$hex = $_GET["i"];            // and much more hex values as string as in your example
$bin = hex2bin($hex);       // convert the hex values to binary data stored as a PHP string
$keyid64 = base64_encode($bin); // remove == , replace as space
$finalkeyid64 = str_replace('=', '', $keyid64);

// Encode Key
$hex2 = $_GET["k"];            // and much more hex values as string as in your example
$bin2 = hex2bin($hex2);       // convert the hex values to binary data stored as a PHP string
$key64 = base64_encode($bin2); // remove == , replace as space
$finalkey64 = str_replace('=', '', $key64);

header('Content-Type: application/json; charset=utf-8');
$json["keys"][0]["kty"] = "oct";
$json["keys"][0]["k"] = $finalkey64;
$json["keys"][0]["kid"] = $finalkeyid64;
$json["type"] = "temporary";

echo json_encode($json);
?>
