<?php
// Create connection
include 'include/config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$folder = "assets/images/";
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);
	
$sql = "INSERT INTO settings (title, username, email, url, address, mobile, image, facebook, twitter, google, linkedin, des)
VALUES
('$_POST[title]','$_POST[username]','$_POST[email]','$_POST[url]','$_POST[address]','$_POST[mobile]','".$_FILES['filep']['name']."','$_POST[facebook]','$_POST[twitter]','$_POST[google]','$_POST[linkedin]','$_POST[des]')";

if (mysqli_query($conn, $sql)) {
    $msg = "You have Added one Item Succesfully";  
    header("Location:settings.php?msg=$msg"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
