<?php
include 'include/config.php';


/* Get the Id of Seletced Message */ 
$id=$_GET['id'];

/* Delete the products in to database by posted id */
mysqli_query($conn,"DELETE FROM products WHERE id='$id'");

/* Error meesages */ 
$msg1 = "One Product Deleted Succesfully.";

/* Pass the message to next page  */ 
header("Location:products.php?msg1=$msg1");


mysqli_close($con);
?>