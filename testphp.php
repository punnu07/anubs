<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
      
	     
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = 'tiger';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         
			mysqli_query($conn,"use anubs");

         $result = mysqli_query($conn,"SELECT * FROM admin");
         if (mysqli_num_rows($result) > 0)
          {

				while($row = mysqli_fetch_array($result))
				{
					
					if(strcmp($_POST['username'], $row["username"])==0 && strcmp($_POST['password'], $row["password"])==0)
					{
						echo "succcess";
						break;
					}
		  
				}
          }
          echo "username or password incorrect";
          
          
          mysql_close($conn);
      ?>
   </body>
</html>

