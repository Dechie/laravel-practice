<?php require("login.class.php") ?>
<?php
  if (isset($_POST['submit'])) {
    $user = new LoginUser($_POST['username'], $_POST['password']);
  }
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
  </head>
  <body>
    <header>
      <nav>
        
        <ul>
          <li><a href="index.php">Home</a></li>

          <li><a href="#">About</a></li>
        </ul> 
        <ul>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
         </header>
    <main>
      <div class="login-page">
    <div class="login-form">
      <h2>Login</h2>
      <form action"" method="POST">
        <input type="text" placeholder="Username" name="username" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <input type="submit" value="Login" name="submit">
        <p> don't have an account? <a href="register.php">Sign Up</a> </p>
      </form>
      <p class="error"> <?php echo @$user->error ?> </p>
      <p class="success"> <?php echo @$user->success ?> </p>

    </div>

  </div>

    </main>
    <footer>

</footer>
  </body>
  
</html>


