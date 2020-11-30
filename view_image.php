
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/new_styles.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    
    <!-- Login Form -->
       
 <br>
 <br>
 <br>  
 
  
  <center>
	  <div class="container"> 



 <?php
$dir = "img/";

echo "<u>Image Files</u> <br><br>";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		if(strcmp($file,".")!=0 && strcmp($file,"..")!=0)
		{
			echo  $file .  "<br>";
		}
    }
    closedir($dh);
  }
}

echo "<br><br>";
echo "<a href=control_panel.php>back</a>";

?> 



</div> 
  </center>
  
    
    
  </div>
</div>
