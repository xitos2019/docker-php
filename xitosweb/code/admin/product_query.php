<?php
// Create connection
include 'include/config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$folder = "assets/images/man/";
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);
move_uploaded_file($_FILES["filep1"]["tmp_name"] , "$folder".$_FILES["filep1"]["name"]);
move_uploaded_file($_FILES["filep2"]["tmp_name"] , "$folder".$_FILES["filep2"]["name"]);
	
$sql = "INSERT INTO products (title, category, client, skills, date, link, img, img1, img2, des, description)
VALUES
('$_POST[title]','$_POST[category]','$_POST[client]','$_POST[skills]','$_POST[date]','$_POST[link]','".$_FILES['filep']['name']."','".$_FILES['filep1']['name']."','".$_FILES['filep2']['name']."','$_POST[des]','$_POST[description]')";

if (mysqli_query($conn, $sql)) {
    $msg = "You have Added one Project Succesfully";  
    header("Location:products.php?msg=$msg"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
