<?php
include_once("rpmeDb.php");

$link = getConnection();
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$passwordHash = generateHash($_POST['password']);

$query = sprintf("INSERT INTO users (username,password) VALUES ('%s', '%s')", $username, $passwordHash);
$result = mysql_query($query);

mysql_close($link);

header( 'Location: http://www.cookienap.com/rpme/' ) ;
?>
