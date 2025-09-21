<?php

// PHP 8.2+ is required.

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->getSelf();

$MadelineProto->logger($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage(peer: '@stickeroptimizerbot', message: "/start");

    $MadelineProto->channels->joinChannel(channel: '@MadelineProto');

    try {
        $MadelineProto->messages->importChatInvite(hash: 'https://t.me/+Por5orOjwgccnt2w');
    } catch (\danog\MadelineProto\RPCErrorException $e) {
        $MadelineProto->logger($e);
    }
}
$MadelineProto->echo('OK, done!');