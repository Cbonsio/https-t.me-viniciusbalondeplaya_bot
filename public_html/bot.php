<?php
$token = '7747037561:AAHBRGVSdmgYuKvtgrmvgR-X7rtrgV2G1y8';
$website = 'https://api.telegram.org/bot7747037561:AAHBRGVSdmgYuKvtgrmvgR-X7rtrgV2G1y8/getMe'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

switch($message) {
    case '/start':
        $response = 'Me has iniciado';
        sendMessage($chatId, $response);
        break;
    case 'info':
        $response = 'Hola!';
        sendMessage($chatId, $response);
        break;
    case 'que haces':
        $response = 'aqui estudiando la semana 2 de automatizacion';
        sendMessage($chatId, $response);
        break;
    case 'como crees que te ira en la sumativa':
        $response = 'super bien, hice los ejercicios y vi los videos';
        sendMessage($chatId, $response);
        break;
    default:
        $response = 'No te he entendido';
        sendMessage($chatId, $response);
        break;
}
