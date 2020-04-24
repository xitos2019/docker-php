<?php
if(empty($_SESSION['admin'])) 
    { 
        header("Location: index.php");       
       
        die("Redirecting to index.php"); 
    }
?>