<?php
$db_host = '127.0.0.1'; // Server Name
$db_user = 'c3617test'; // Username
$db_pass = 'test'; // Password
$db_name = 'c3617myband'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>
