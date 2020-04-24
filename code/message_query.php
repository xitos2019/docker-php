<?php

// To insert in Database
$subjects = "Test Shop Email Marketing"; 
$comments = $_POST['comment'];
 if(!isset($hasError)) {
        $emailTo = ozzy.chaudry@gmail.com; // Put your own email address here
        $body = "Subject: $subjects \n\nComments:\n $comments";
		$headers = "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
        $headers .= 'From: Test Shop info@luxurygifts.co.uk' . "\r\n" . 'Reply-To: ' . $email;
		$headers .='X-Mailer: PHP/' . phpversion();

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
		
    }




?>
