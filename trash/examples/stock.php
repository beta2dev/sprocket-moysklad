<?php
/**
 * Created by IntelliJ IDEA.
 * User: Пользователь
 * Date: 28.11.14
 * Time: 17:56
 */








//https://online.moysklad.ru/exchange/rest/stock/json






$request=array(



);

$body=json_encode($request);

$sock = fsockopen("ssl://online.moysklad.ru", 443, $errno, $errstr, 30);

if (!$sock) die("$errstr ($errno)\n");

fputs($sock, "GET /exchange/rest/stock/json HTTP/1.1\r\n");
fputs($sock, "Host: online.moysklad.ru\r\n");
//fputs($sock, "Authorization: Basic " . base64_encode("admin@test_api:35b458f5cc") . "\r\n");
fputs($sock, "Authorization: Basic " . base64_encode("admin@hrenovuha:e940df723f") . "\r\n");

fputs($sock, "Content-Type: application/xml \r\n");
fputs($sock, "Accept: */*\r\n");
fputs($sock, "Content-Length: ".strlen($body)."\r\n");
fputs($sock, "Connection: close\r\n\r\n");
fputs($sock, "$body");

while ($str = trim(fgets($sock, 4096)));

$body = "";

while (!feof($sock))
    $body.= fgets($sock, 4096);


echo $body;

fclose($sock);
$t=substr($body,4,count($body)-4);

echo 'body>>>'.$t."<<<<<";
var_export(json_decode($t));