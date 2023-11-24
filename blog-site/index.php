<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="style.css">
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
        
      <div class="grid-container">
<?php
          $jsonfile = 'blogs.json';
          $data = file_get_contents($jsonfile);
          $blogs = json_decode($data, true);

          
        if ($blogs != null) {
          foreach($blogs as $blog){
            echo "<div class=\"grid-item\">";
            echo "<h2> <a href=\"blogread.php?slug=". $blog['title']." \">" . $blog['title'] . "</a> </h2>";
            echo "<p>by " . $blog['username'] . "</p>";
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
