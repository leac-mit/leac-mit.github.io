<?php
$contact_name = $_post['name'];
$contact_email = $_post['email'];
$contact_subject = $_post['subject']
$contact_message = $_post['comment'];

$mail_to = 'mit-leac@mit.edu';
$subject = 'LEAC_contactform Request:'.$contact_subject;

$body_message = 'From: '.$contact_name."\n";
$body_message .= 'E-mail: '.$contact_email."\n";
$body_message .= 'Message: '.$contact_message;

$headers = 'From: '.$contact_email."\r\n";
$headers .= 'Reply-To: '.$contact_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Your message has been sent. We will get back to you as soon as possible!');
        window.location = 'contact.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact us at mit-leac@mit.edu');
        window.location = 'contact.html';
    </script>
<?php
}

?>