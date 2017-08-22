<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email = 'jpemberton76@gmail.com';
$subject = $HTTP_POST_VARS['subject'];
$message = $HTTP_POST_VARS['message'];


/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
if (mail($email,$subject,$message)) {
    echo "<h4>Thank you for sending email</h4>";
} else {
    echo "<h4>Can't send email to $email</h4>";
}
?>
</body>
</html>