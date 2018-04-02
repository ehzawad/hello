<!DOCTYPE html>

<html>
  <head>
    <title>Log In</title>
  </head>
  <body>
    <form action="<?=router("login/attempt");?>" method="post">
      <table>
        <tr>
          <td>Email:</td>
          <td><input name="email" type="text"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="pass" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Log In"></td>
        </tr>
      </table>      
    </form>
  </body>
</html>
