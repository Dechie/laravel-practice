<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #333;
        color: #f1f1f1
        padding: 15px 20px;
        
      }

      nav {
        margin: 10px;
        display: flex;
        padding: 10px;
        justify-content: space-between;
        background-color: #f1f1f1
      }

      nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
      }

      nav ul li {
        margin-right: 20px;
      }
      
      .login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-form {
      width: 300px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form input[type="submit"] {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .login-form input[type="submit"] {
      background-color: #333;
      color: #fff;
      cursor: pointer;
    }
    </style>
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
      <form>
        <input type="text" placeholder="Username" required><br>
        <input type="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
      </form>

    </div>

  </div>

    </main>
    <footer>

</footer>
  </body>
  
</html>


