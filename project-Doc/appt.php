<html>
   <head>
      <title>Creating MySQL Database</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br />';
         $sql = 'CREATE DATABASE TUTORIALS';
         $retval = mysqli_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not create database: ' . mysqli_error());
         }
         echo "Database TUTORIALS created successfully\n";
         mysqli_close($conn);
      ?>
   </body>
</html>