<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
  <head>
    <title></title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #ffffff;
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

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
      }
    
    .gridItem {
        justify-content: center;
    }

    main {
        margin: 10px;
        padding: 10px;
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
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      
    </header>

    <main>

      <h2> Welcome To Blogs!</h2>
        
      <div class="grid">
<?php
          $jsonfile = 'blogs.json';
          $data = file_get_contents($jsonfile);
          $blogs = json_decode($data, true);

          
        if ($blogs != null) {
          foreach($blogs as $blog){
            echo "<div class=\"gridItem\">";
            echo "<h2> <a href=\"blogread.php?slug=". $blog['title']." \">" . $blog['title'] . "</a> </h2>";
            echo "<p>by " . $blog['username'] . "</p>";
            echo "<p>" . $blog['content'] . "</p>";
            echo "</div>";
          }
        }  else {
        echo 'No blogs found';
        }
?>
      </div>
    </main>
    <footer></footer>
  </body>
  
</html>
