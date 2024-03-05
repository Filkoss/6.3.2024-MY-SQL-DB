<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Registration</title>
</head>

<body>
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div>
      <input type="submit" value="Login">
    </div>
  </form>
  <h2>Registration</h2>
  <form action="register.php" method="post">
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div>
      <input type="submit" value="Register">
    </div>
  </form>
</body>

</html>