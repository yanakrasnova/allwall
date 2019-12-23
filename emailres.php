<?php
$msg_box = " ";
if(isset($_POST['btn_submit'])) {
    function send_mail($message){
        $to = "yana.krasnovaaa@gmail.com";
        $subject = "Письмо обратной связи";
        $subject = '=?UTF-8?B?'.base64_encode($subject).'?=';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From: тестовое письмо <allwall@allwall.ua>\r\n";
        $headers.= "Content-type: text/html; charset=UTF-8\r\n";
        $headers.= "Content-transfer-encoding: quoted-printable";

        mail($to, $subject, $message, $headers);
    }

    $message = " Имя пользователя: " . $_POST['name'] . "<br/>";
    $message .= " E-mail: " . $_POST['email'] . "<br/>";
    send_mail($message);
    $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
}
