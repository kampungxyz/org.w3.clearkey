<?php
header('Content-Type: application/json; charset=utf-8');
$json["keys"][0]["kty"] = "oct";
@$json["keys"][0]["kid"] = str_replace('=','',base64_encode(hex2bin($_GET["i"])));
@$json["keys"][0]["k"] = str_replace('=','',base64_encode(hex2bin($_GET["k"])));
$json["type"] = "temporary";
echo json_encode($json, JSON_UNESCAPED_SLASHES);
