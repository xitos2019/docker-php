<?php
$link = mysql_connect('cust-mysql-123-20', 'xitos', 'xitos@123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_name="xitos";

mysql_select_db("$db_name")or die("cannot select DB");
$sql="UPDATE seo SET keywords = '$_POST[tags]' ,description = '$_POST[des]'";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
$msg = "SEO Information Updated Successfully";
header("Location: seotags.php?msg=$msg"); 
exit;

mysql_close($link);
?>