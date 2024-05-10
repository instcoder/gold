<?php
$ip=getenv(REMOTE_ADDR);
$text="New order /n Name: $name /n  Address: $addy /n E-Mail: $email /n Batch: $batch /n Recipient: $recipent /n Status: $radio" /n /n User IP: $ip;
$email="gentert@goldentertainment.net";
$subj="CC order";
mail($email, $subj, $text);
echo"<center>Thank you for your order.</center>";


?>