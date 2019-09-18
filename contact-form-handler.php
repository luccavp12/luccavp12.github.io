<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "lucca12vp@gmail.com";
  $headers = "From: ".$emailFrom;
  $text = "You have recieved mail from: ".$name."\n\n".$message;

   mail ($mailTo, $subject, $message, $headers);
   header("Location: index.html");
}