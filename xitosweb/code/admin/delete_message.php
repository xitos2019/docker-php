<?php
include 'include/config.php';

/* Get the Id of Seletced Message */ 

$id=$_GET['id'];

/* Delete the orders in to database by posted id */ 
mysqli_query($conn,"DELETE FROM messages WHERE id='$id'");
/* Error meesages */ 
$msg1 = " Message Deleted Succesfully.";
/* Pass the message to next page  */ 
header("Location:messages.php?msg1=$msg1");


mysqli_close($con);
?>