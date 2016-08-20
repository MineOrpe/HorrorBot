<?php
$output = json_decode(file_get_contents('php://input'));
$chat_id = $output['message']['chat']['id'];
$access_token = '256842049:AAFivsiW7p8a0tveHbNgbkjq_E9cuKvs8HE';
$api = 'https://api.telegram.org/bot' . $access_token . '/';
$message = $output['message']['text'];
if($message == '/story') {
	sendMessage($chat_id, '123');
}
function send_message($chat_id, $message){
	file_get_contents($GLOBALS['api'] . 'sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}
?>
