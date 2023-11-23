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
