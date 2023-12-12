<?php
/*  composer require telegram-bot/api   */

require_once "../vendor/autoload.php";
require_once "../env.php";

$env = new EnvLocal();
$bot = new \TelegramBot\Api\BotApi($env->get_telegram_bot_token());


$name       = $_POST['name'];
//$surname    = $_POST['surname'];
//$email      = $_POST['email'];
$phone      = $_POST['phone'];
//$text       = $_POST['text'];

$msgName    = "<b>имя: </b><code>$name</code>\n";
//$msgSurname = "<b>фамилия: </b><code>$surname</code>\n";
//$msgEmail   = "<b>email: </b><code>$email</code>\n";
$msgPhone   = "<b>телефон: </b><code>$phone</code>";
//$msgText    = "<b>текст: </b><code>$text</code>";

if(strlen($name)    < 2){$msgName = '';}
//if(strlen($surname) < 2){$msgSurname = '';}
//if(strlen($email)   < 2){$msgEmail = '';}
if(strlen($phone)   < 2){$msgPhone = '';}
//if(strlen($text)    < 2){$msgText = '';}


//$message = $msgName . $msgSurname . $msgEmail . $msgPhone . $msgText;
$message = $msgName . $msgPhone;


if(strlen($email) > 6 || strlen($phone) > 5){
    try {
        $bot->sendMessage($env->get_telegram_chat_id(), $message, "HTML");
    } catch (TelegramResponseException $exception) {    // TelegramResponseException must be imported
        //continue;
    }
    header("Location: /");
    exit();
}


