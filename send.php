<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$pass = trim($_POST['password']);
$repass = trim($_POST['RePassword']);
$state = trim($_POST['state']);



if(mail("ersultan.kengesov@gmail.com",
        "Новое письмо с сайта",
        "Имя: ".$name."\n".
        "Email: ".$email."\n".
        "Пароль: ".$pass."\n".)

) {
  echo('Письмо успешно отправлено!');
}
else {
  echo('Есть ошибки! Проверьте данные...');
}

?>
