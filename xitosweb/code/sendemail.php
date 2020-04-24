<?php
    include 'inc/config.php';
	$name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 
	$company = $_POST['company']; 

    $email_from = $email;
    $email_to = 'f.saghir@xitos.co.uk';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
    $headers = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
    $headers .= 'From: Xitos Uk Ltd info@xitos.co.uk' . "\r\n" . 'Reply-To: ' . $email;
	$headers .='X-Mailer: PHP/' . phpversion();
    $success = @mail($email_to, $subject, $body, $headers, 'From: <'.$email_from.'>');
	
	
	$sql = "INSERT INTO messages (name, email, subject, company, message)
    VALUES
    ('$name','$email','$subject','$company','$message')";
    if (mysqli_query($conn, $sql)) {
    $msg = "Message Sent Succesfully!!";  
    header("Location:contact-us.php?msg=$msg"); 
    exit;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);	
?>