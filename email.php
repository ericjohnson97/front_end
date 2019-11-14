<?php
$email_address = $_POST['email'];

file_put_contents('email.txt', $email_address, FILE_APPEND);


return true;			
?>