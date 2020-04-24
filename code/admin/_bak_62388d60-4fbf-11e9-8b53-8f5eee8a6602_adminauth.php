<?php
 /* Connection string to connect with database */ 
$connectionstring = mysql_connect( 'cust-mysql-123-20', 'xitos', 'xitos@123' );
$database =  mysql_select_db( 'xitos' );		

/* Posted values from User */
$username=$_POST['admin'];
$password=$_POST['password'];

/* Following query will select the information from admin and check the correct admin username and password  */
$sql="SELECT * FROM admin WHERE admin='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count>0)
{
session_start();
$_SESSION['admin']=$username;
$_SESSION['password']=$password;
$session=$_SESSION['admin'];
header("location:home.php?user=$session");
}

else
{		
header("Location: index.php?registration=unavailable");
}
?>


