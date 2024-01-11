<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page admin</title>
    <link rel="stylesheet" href="style_loginadmin.css" />
  </head>
  <body>
    <div class="d-flex flex-column align-items-center">
      <div>
        <link href="./c_ondes-banner-fx1.css" rel="stylesheet" />
        <img src="assets/selamatdatang.png" alt="rectangle" width="100%" height="100%" class="c_ondes-banner-fx1-rectangle" />
      </div>
    <div class="login-container">
      <h2>Login admin</h2>
      <form action="process-login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
        <a href="halaman_admin.html">
          <button type="submit">Login</button>
        </a>
      </form>
    </div>
  </body>
</html>
