<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $place = $_POST['place'];

	$to = "mrelbat@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = 'mysite@mail.com';
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email /n 	
    Откуда: $place"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Форма отправлена.</p>