<?php
define('SALT_LENGTH', 9);

function getConnection() {
  $link = mysql_connect('localhost', 'rpme', 'l3v3luP');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }

  // make foo the current db
  $db_selected = mysql_select_db('rpme', $link);
  if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
  }
  return $link;
}

function generateHash($plainText, $salt = null)
{
    if ($salt === null)
    {
        $salt = substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
    }
    else
    {
        $salt = substr($salt, 0, SALT_LENGTH);
    }

    return $salt . sha1($salt . $plainText);
}

function getSalt($username) {
  $link = getConnection();
  $query = sprintf("select password from users where username='%s'", mysql_real_escape_string($username));
  $result = mysql_query($query); 
  while ($row = mysql_fetch_assoc($result)) {
    return substr($row['password'], 0, SALT_LENGTH);
  }
}
?>

