<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="style.css"> 
    <style>
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

<?php
          $parameter = $_GET["slug"];
          
          $jsonfile = 'blogs.json';
          $data = file_get_contents($jsonfile);
          $blogs = json_decode($data, true);

          $desiredValue = array_filter($blogs, function($item) use ($parameter) {
            return ($item['title'] === $parameter);
          });

          if (!empty($desiredValue)) {
            
            $data = reset($desiredValue);
            echo "<h2>" . $parameter . "</h2>";
            echo "<p> written by " . $data['username'] . "</p>";
            echo "<p>" . $data['content'] . "</p>";
            
          } else {
            
            echo "Parameter value not found or invalid.";
            
          }
?>
    </main>
    <footer></footer>
  </body>
  
</html>
