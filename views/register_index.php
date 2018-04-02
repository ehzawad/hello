<!DOCTYPE html>

<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <form action="<?=router("login/try-register");?>" method="post">
      <table>
        <tr>
          <td>Name:</td>
          <td><input name="name" type="text"></td>
        </tr>

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
