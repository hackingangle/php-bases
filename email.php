<?php

$from = "xXx";
$to = "hackingangle@163.com";
$subject = "robots request";
$message = "hi";
mail($to, $subject, $message, "From:". $from);