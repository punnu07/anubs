
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

if($_FILES['input-file']['name'])
{
	
	// checking if the file is selected or not
	
	$file_name = $_FILES['input-file']['name'];
	$file_tmp = $_FILES['input-file']['tmp_name'];
	$file_size = $_FILES['input-file']['size'];
	$file_error = $_FILES['input-file']['error'];
	$file_type = $_FILES['input-file']['type'];
	$file_ext = explode('.', $file_name);
	$file_act_ext = strtolower(end($file_ext));
	$allowed1 = ['jpg'];
	$allowed2 = ['jpeg'];
	$allowed3 = ['png'];
	$path = 'img/';

      
      
	if( !in_array($file_act_ext, $allowed1))
		return 'Only .jpg and png Files Are Allowed!';
     

	if( $file_error != 0 )
	{
		
		echo "file add error";
		return ;
	
	} 
 	if( $file_size > 16000000 )
 	   {
		 echo $file_size;  
		} 
		//return 'Image Size Should Be less Be Than 16mb';
  
	
	$file_des = $path .'/'. $file_name;

	$move = move_uploaded_file($file_tmp, $file_des);
    

	if(!$move)
	{
	 	
	 	header("Location:control_panel.php");	 	
	 	 
	}
	else
	{ 
		echo "Image uploaded";
		echo "<br><br>";
	    echo "<a href=control_panel.php>back</a>";
		
	}
	
}
else
{

	header("Location:control_panel.php");
}
	
?>



</div> 
  </center>
  
    
    
  </div>
</div>
