<?php

namespace App\Controllers;

// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '5939117599:AAE-P2w9eOqZlFonZYkavFovZNYdXFLoU8Y');

// сюда нужно вписать ваш внутренний айдишник, свой айдишник в телеграмм
define('TELEGRAM_CHATID', '559455901');

// 559455901 - Ксюша

class Cont extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $firstname = $request->getVar('firstname');
        $emailadress = $request->getVar('emailadress');

        $email = \Config\Services::email();

        $email->setFrom('oxysmm@gmail.com', 'Your Name'); // от кого письмо
        $email->setTo('$email'); // абонент

        $email->setSubject('Запрос на консультацію');
        $message = 'Користувач ' . $firstname . ' запитує консультацію ' . $emailadress;
        $email->setMessage($message);


        $email->send();

        $this->message_to_telegram($message);
        return view('/cont');
    }

    function message_to_telegram($text)
    {
        $ch = curl_init();

        curl_setopt_array(
            $ch,
            array(
                CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_POSTFIELDS => array(
                    'chat_id' => TELEGRAM_CHATID,
                    'text' => $text,
                ),
            )
        );
        curl_exec($ch);
    }
}
