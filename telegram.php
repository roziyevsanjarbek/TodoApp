<?php

require 'vendor/autoload.php';


use GuzzleHttp\Client;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$botToken = $_ENV['BOT_TOKEN'];
if (!$botToken) {
    die('Bot token not found in .env file.');
}

$telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

$chatId = '7585290599';
$message = 'Salom! Bu PHP orqali yuborilgan xabar.';

$client = new Client();

try {
    $response = $client->post($telegramApiUrl, [
        'form_params' => [
            'chat_id' => $chatId,
            'text' => $message,
        ],
    ]);

    echo "Xabar yuborildi! Javob: " . $response->getBody();
} catch (Exception $e) {
    echo "Xatolik yuz berdi: " . $e->getMessage();
}


