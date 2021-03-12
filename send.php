<?php
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$first_name = htmlspecialchars($first_name);
$email = htmlspecialchars($email);
$first_name = urldecode($first_name);
$email = urldecode($email);
$first_name = trim($first_name);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("jromanyuk@ngs.ru", "Заявка с сайта", "ФИО:".$first_name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
