<?php 
//инициализация переменных
if(isset($_POST['otprav'])){
	$name = trim(empty($_REQUEST['firstname'])) ? "" : $_POST['firstname'];
	$email = trim(empty($_REQUEST['email'])) ? "" : $_POST['email'];
	$phone = trim(empty($_REQUEST['phone'])) ? "" : $_POST['phone'];
	$date = trim(empty($_REQUEST['dateOfBirth'])) ? "" : $_POST['dateOfBirth'];
	$message = trim(empty($_REQUEST['contact_list'])) ? "" : $_POST['contact_list'];

	//отправка данных формы на email
	$to = "join@ecwid.com"; //сюда вписать вашу электронную почту
	$subject = "Письмо"; //Тема письма
	$charset = "utf-8"; //кодировка
	$headerss ="Content-type: text/html; charset=$charset\r\n"; 
	$headerss.="MIME-Version: 1.0\r\n"; //технический заголовок письма
	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
	$msg = "Имя: ".$_POST['firstname']."<br>"; //текст сообщения для отправки
	$msg .= "E-mail: ".$_POST['email']."<br>"."Телефон: ".$_POST['phone']."<br>"."Дата рождения: ".$_POST['dateOfBirth']."<br>"."Сообщение: ".$_POST['contact_list']."<br>"; 
	mail($to, $subject, $msg, $headerss); //собирает все введенные данные и отправляет их адресат

	echo "<h1 align='center'>Сообщение отправлено</h1>";
}
?>