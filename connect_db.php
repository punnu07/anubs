<?php
   session_start();
   ?>


<html>
   <head>
      <title>Anubs | Logging in </title>
   </head>
   <body>
      <?php
       
	     
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = 'tiger';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         $sucess=0;
         
         
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
						
						$sucess=1;
						$_SESSION["success"]="yes";
						header("Location:control_panel.php");
						
					}
					else
					{
						$_SESSION["success"]="no";
						header("Location:wrong_login.html");
					}
		  
				}
          }
          
          
          
      ?>
   </body>
</html>

