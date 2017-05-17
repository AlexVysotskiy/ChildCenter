<?php

ini_set('display_errors', 0);

if (isset($_POST['phone'])) {

    $name = strip_tags(trim($_POST['name']));
    $email = strip_tags(trim($_POST['phone']));
    $message = strip_tags(trim($_POST['message']));

    $from = 'info@teremoc64.com';
    $message = '<div><p>Заявка на обратный звонок <b>' . $_SERVER['SERVER_NAME'] . '</b></p>
      <p><b>Контактные данные:</b><br />
      &emsp;Имя: ' . $name . '<br />
      &emsp;Телефон: ' . $name . '<br />
      &emsp;Сообщение: ' . $message . '</p>
      </div>';
    $message = wordwrap($message, 70);

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Сайт " . $_SERVER['SERVER_NAME'] . " <$from>\r\n";

    mail($from, 'Заявка на обратный звонок с ' . $_SERVER['SERVER_NAME'], $message, $headers);
}

echo 'MF000';
