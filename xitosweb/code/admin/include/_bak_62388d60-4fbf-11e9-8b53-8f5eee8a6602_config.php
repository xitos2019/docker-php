<?php

$db_host = 'cust-mysql-123-20';

$db_name = 'xitos';

$db_username = 'xitos';

$db_password = 'xitos@123';

$mysqli = new mysqli(
                     $db_host, 
					 $db_username, 
					 $db_password,
					 $db_name);
$conn = $mysqli;
?> 