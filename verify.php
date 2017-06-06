<?php
$access_token = 'xIx9AyPAMwLJEnK8AfbqBvH4xFgnoABcNaTJUK+43BEjq+rXsvJYI8ppVZzTUEbtJQzc/u0VcUAktt57qVC1rWC4QjBC5o2O70BYNOMDNi6JZ2eWoNzP1fcy25a/9p9jTSQTAfzp9hLOoIuyNbq0+gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
