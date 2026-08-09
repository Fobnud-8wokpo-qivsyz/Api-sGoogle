<?php
/**
 * Sample limpio — Hola Bot (Telegram webhook)
 * Origen: material del repo Api-sGoogle
 *
 * Uso: token por entorno TELEGRAM_BOT_TOKEN
 * Configura webhook apuntando a este archivo (HTTPS).
 */

$BOT_TOKEN = getenv('TELEGRAM_BOT_TOKEN') ?: 'PEGA_TU_TOKEN_AQUI';
$API = 'https://api.telegram.org/bot' . $BOT_TOKEN . '/';

function apiRequest($method, $parameters = []) {
  global $API;
  foreach ($parameters as $key => &$val) {
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = $API . $method . '?' . http_build_query($parameters);
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT => 60,
  ]);
  $response = curl_exec($ch);
  curl_close($ch);
  $data = json_decode($response, true);
  return $data['result'] ?? false;
}

$content = file_get_contents('php://input');
$update = json_decode($content, true);
if (!$update || !isset($update['message'])) {
  exit;
}

$message = $update['message'];
$chat_id = $message['chat']['id'];
$text = $message['text'] ?? '';

if (strpos($text, '/start') === 0) {
  apiRequest('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'Hola desde Api-sGoogle sample.',
    'reply_markup' => [
      'keyboard' => [['Hola', 'Hi']],
      'one_time_keyboard' => true,
      'resize_keyboard' => true,
    ],
  ]);
} elseif ($text === 'Hola' || $text === 'Hi') {
  apiRequest('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'Nice to meet you',
  ]);
} else {
  apiRequest('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'Escribe /start',
  ]);
}
