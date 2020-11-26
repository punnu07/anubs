<?php
   session_start();
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Anub's | Control Panel</title>
	</head>
<body>
<br>
<br>
	
	 <center>
		 Control Panel
		 </center>
	
	<br>
	<br>	

<?php
   


if(strcmp($_SESSION["success"],"yes")!=0)
{
		header("Location:admin_login.html");
}


?>
	
	
</center>
	 
	
		
	 <div style="width: 50%; height: 50%; background-color: white; float:left; border-right:solid 1px #ccc;">
		<center>
	<b>Image Upload(jpg files only)</b>
	<br>
	<br>
	<form action="add_image.php" enctype="multipart/form-data" method="POST">
		<input type="file" name="input-file" id="input-file[]" accept="all" multiple />
		
		<button type="submit" name="single-upload" >UPLOAD</button>

	</form>
	
	<br>
	<br>
	
	<b>Image View</b>
	<br>
	<form action="view_image.php" enctype="multipart/form-data" method="POST">
			
		<button type="submit" name="single-upload" >VIEW IMAGES</button>

	</form>
	
	

   <br>
   <br>
   
   <b>Image Delete</b>
	<br>
	
	<form action="delete_image.php" method="POST">
		
		 <input type="text" id="delete_file_name" name="delete_file_name" value="Enter image name" onfocus="this.value=''">
			
		<button type="submit" name="single-upload" >DELETE IMAGE</button>

	</form>
	
	
</center>
	 
	 </div>
    <div style="width: 50%; height: 50%; background-color: white; float:right;">-</div>
    
	
	<center>
	<b>Video Upload(mp4 files only)</b>
	<br>
	<br>
	<form action="add_video.php" enctype="multipart/form-data" method="POST">
		<input type="file" name="input-file" id="input-file[]" accept="all" multiple />
		
		<button type="submit" name="single-upload" >UPLOAD</button>

	</form>
	
	<br>
	<br>
	
	<b>Video View</b>
	<br>
	<form action="view_video.php" enctype="multipart/form-data" method="POST">
			
		<button type="submit" name="single-upload" >VIEW VIDEOS</button>

	</form>
	
	

   <br>
   <br>
   
   <b>Video Delete</b>
	<br>
	
	<form action="delete_video.php" method="POST">
		
		 <input type="text" id="delete_video_name" name="delete_video_name" value="Enter video name" onfocus="this.value=''">
			
		<button type="submit" name="single-upload" >DELETE VIDEO</button>

	</form>
	



<br>
<br>
<br>
<br>
<br>
<a href=logout.php> logout</a>

	



</body>
</html>






<script type="text/javascript">



	function _(id){
		return document.getElementById(id);
	}

	function select_file_name(id) {
	    var filename = _(id).files[0].name;
	    if (filename.length > 20) {
	        filename = filename.substring(0, 20) + '...'
	    };
	    _('file-upload').innerHTML = '-> ' + filename;
	    _('file-upload').style.backgroundColor = '#1dd1a1'
	}

</script>
