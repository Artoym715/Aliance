<?php
$username = htmlspecialchars($_POST["username"]);
$userphone = htmlspecialchars($_POST["userphone"]);

$token = "6555795085:AAFS3JtTV41-TbjUPXtjXkABsXbzLZghZac";
$chat_id = "-4160103236";

$formData = array(
	"Клиент: " =>  $username,
	"Телефон: " =>  $userphone
);

foreach ($formData as $key => $value) {
	$text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
	echo "Success";
} else {
	echo "Error";
}
