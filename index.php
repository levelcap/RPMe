<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/rpme/css/style.css" />
  </head>
  <body>
    <h1>This is the login page!  Yay!</h1>
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form name="form1" method="post" action="php/login.php">
          <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <tr>
                <td colspan="3"><strong>Member Login </strong></td>
              </tr>
              <tr>
                <td width="78">Username</td>
                <td width="6">:</td>
                <td width="294"><input name="username" type="text" id="username"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password" id="password"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Login"></td>
              </tr>
            </table>
          </td>
        </form>
      </tr>
    </table>
    <a href="register.php">Don't have a login?  Clicka here!</a>
  </body>
</html>
