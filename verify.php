<?php
$access_token = 'EP6FaPC0e1LT5p0COaDIgkFaufJW66EQK/QXsXJmMt0WwilSpZMhbnH+vSpuYEwfCkrGH4YgQ2rxCye9BdL+0zZb2JcseDv8DgI61Qkjh+u74sq3xSJf7DlNK7xVFzGGrvBkvum5TwCdb24q8yNpRQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
