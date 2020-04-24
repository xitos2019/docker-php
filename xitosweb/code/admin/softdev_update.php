<?php
// Create connection
include 'include/config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$sessionuser = $_POST[sessionuser];
$sql = "UPDATE pages SET content = '$_POST[des]' WHERE id = '4' ";	
	

if (mysqli_query($conn, $sql)) {
    $msg = "Page Updated Successfully";  
    header("Location: services.php?msg=$msg"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//}
mysqli_close($conn);
?>
