<?php

$to = "ishapaghdal0@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email msg";
$from = "ishapaghdal@gmail.com";


$headers = "From : $from";
mail($to , $subject , $message , $headers);

if(mail($to , $subject , $message , $headers)){
echo "mail Sent.";
}
else{
    echo "Failed to send mail";
}
?>