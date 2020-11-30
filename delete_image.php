

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
$fn=$dir.$_POST['delete_file_name'];

$a=unlink($fn);
if($a==FALSE)
{
	?>

	<h4>Unable to delete</h4>
	<?php
}
else
{
	
	echo "<h4> Deleted ".$_POST['delete_file_name']."</h4>";
}
echo "<br><br>";
echo "<a href=control_panel.php>back</a>";


?>


</div> 
  </center>
  
    
    
  </div>
</div>
