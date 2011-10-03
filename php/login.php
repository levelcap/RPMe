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
$passwordHash = generateHash($_POST['password'], getSalt($username));

$query = sprintf("SELECT username from users where username = '%s' AND password = '%s'", $username, $passwordHash);
$result = mysql_query($query);
if (checkName($result, $username)) {
  echo "Logged the fuck in";
}
else {
  echo "Shiiiiiit";
}
mysql_close($link);


function checkName($result, $username) {
  while($row = mysql_fetch_array($result))
  {
    if ($row['username'] == $username) {
      return true;
    }
  }
  return false;
}
?>
