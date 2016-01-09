<?php
$TO = "pereira93130@gmail.com";
$subject = "Wild Circus Demande d'infos";
$h = "From: " . $TO;
$message = "Message";
while (list($key, $val) = each($HTTP_POST_VARS)) {
$message .= "$key : $val\n";
}
mail($TO, $subject, $message, $h);
header("Location:accuse.html");
?> 