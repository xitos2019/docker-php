<?php
// Create connection
include 'include/config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$folder = "assets/images/";
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

$sql = "UPDATE settings SET title = '$_POST[title]', username = '$_POST[username]', email = '$_POST[email]', url = '$_POST[url]', image = '".$_FILES['filep']['name']."', mobile = '$_POST[mobile]', address = '$_POST[address]', facebook = '$_POST[facebook]', twitter = '$_POST[twitter]', linkedin = '$_POST[linkedin]', des = '$_POST[des]', google = '$_POST[google]' WHERE id = '1' ";	
	

if (mysqli_query($conn, $sql)) {
    $msg1 = "Information Updated Successfully";  
    header("Location: settings.php?msg1=$msg1"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//}
mysqli_close($conn);
?>
