<?php
$msg = '';
//Don't run this unless we're handling a form submission
if ((isset($_POST['myName'])) && empty($_POST['honeypot'])) {

    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    date_default_timezone_set('Etc/UTC');

    require '../../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.robertheintze.com';
    $mail->Port = 587;

    $mail->SMTPAuth = true;
    //Use a fixed address in your own domain as the from address
    $mail->Username = "sayhey@robertheintze.com";
    $mail->Password = "Enter1234567890";


    $mail->setFrom('sayhey@robertheintze.com', 'Robert Heintze');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('rch250@gmail.com', 'Robert Heintze');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($myEmail, $myName);
    $mail->Subject = 'Correspondance from RobertHeintze.com';
    //Keep it simple - don't use HTML
    $mail->isHTML(true);
    //Build a simple message body
    $mail->Body = 'Thank you for contacting me. I will respond to your comment or question.  '
        . "\r\n" . '  Name:    ' . $myName . ' Email:   ' . $myEmail . ' Question: ' . $myQuestion;

        <<<EOT
Email: $myEmail;
Name: $myName;
Message: $myQuestion;
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        $msg = "Mailer Error:" .  $mail->ErrorInfo;
    }
//    else {
//        include 'success.html.php';
//    }
//} else {
//    include 'contact.html.php';
}
?>
