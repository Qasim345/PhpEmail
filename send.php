<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$to = "qasimsarwari2020@gmail.com";
$subject = "Mail from users";
$txt = "Name = ".$name."\r\n Email = ".$email."\r\n Message = ".$message;
$headers = "From: qasimexam@example.com \r\n";
mail($to, $subject, $txt, $headers);
?>