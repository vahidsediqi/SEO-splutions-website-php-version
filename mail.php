


<?php
$from = '<office@seosolutions.at>'; //change this to your email address
$to = '<office@seosolutions.at>'; // change to address
$subject = 'Message from SEO Solutions'; // subject of mail

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'your@gmail.com', //your gmail account
        'password' => 'snip' // your password
    ));

// Send the mail
$mail = $smtp->send($to, $headers, $body);

//check mail sent or not
if (PEAR::isError($mail)) {
    echo '<p>'.$mail->getMessage().'</p>';
} else {
    echo '<p>Message successfully sent!</p>';
}


$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "vaheed.sediqi@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>