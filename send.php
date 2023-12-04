<?php

require_once("vendor/autoload.php");

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', 
        'publicKey' => 'BKO6jZYLPd815FsrIFABJuIuT2CLFrXgZ7-42XhnUiNe7wX9aUM4AQ27IHL5Zd-Kw5VCBoV6eigS0qe5Heop5gU', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'haUHaaX-qogSuQBgOAX0xexZcjFQoDQ7DLl2DjKJqA4', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL

    ],
];

$webPush = new WebPush($auth);
$webPush->queueNotification(...);

$payload = 

$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/eO7DcWXhE28:APA91bGTrjUZo_K8eMPSrqY1SJqeuR5-SIziIxkLrTjGTzf_EYvSvXa_CfoJ6NU-akzuB5aqFGXbwGEYbEKwC6qckvxrqf0SBZxi9QpzSDcizkO5xhapsjVenY8kNDnViZkxI0utqSw-","expirationTime":null,"keys":{"p256dh":"BKHe33118lORvn_gO0Dvuy7mBWwJIM3dqTnV8qeW-wMnP810UvKU_QScye6LdFFhmmg70hQdFZ3vmTzZV8N_4YY","auth":"Q935IKoOk8NlGr4f0o2zng"}}', true))
    , '{"title": "Hello from PHP", "body": "PHP is amazing", "url":"./new"}', ['TTL' => 5000]);

    print_r($report);