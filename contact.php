<?php
$message = '';
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject'])){
    die('Please ensure name and email are provided.');
}
$message .= <<<TEXT
    Name: {$_POST['name']}
    Email: {$_POST['name']}
    subject {$_POST['subject']}
TEXT;
$to = 'test@testdomain.com';


$subject = 'You have been contacted!';


$from = 'Your website';


$fromEmail = 'yoursite@domain.com';


$header = 'From: ' . $from . '<' . $fromEmail . '>';


if(!mail($to, $subject, $message, $header)){
    die('A Problem sending email.');
}else{
    die('Thank you Your Messages has been Sent!');
}
?>