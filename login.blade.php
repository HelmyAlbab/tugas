<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="project/loginStyle.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="#" method="post">
        <div class="txt_field">
          <input type="text" required />
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" minlength="8" required />
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="submit"/>
        <div class="signup_link">Not a member? <a href="/register">Signup</a></div>
      </form>
    </div>
  </body>
</html>
