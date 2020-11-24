<?php
if($_FILES['input-file']['name']){
	// checking if the file is selected or not
	
	$file_name = $_FILES['input-file']['name'];
	$file_tmp = $_FILES['input-file']['tmp_name'];
	$file_size = $_FILES['input-file']['size'];
	$file_error = $_FILES['input-file']['error'];
	$file_type = $_FILES['input-file']['type'];
	$file_ext = explode('.', $file_name);
	$file_act_ext = strtolower(end($file_ext));
	$allowed1 = ['mp4'];
	$allowed2 = ['jpeg'];
	$allowed3 = ['png'];
	$path = 'videos/';

      
      
	if( !in_array($file_act_ext, $allowed1))
		return 'Only .mp4 Files Are Allowed!';
     

	if( $file_error != 0 )
		return ;

     
 	if( $file_size > 160000000 )
 	   {
		 echo $file_size;  
		} 
		//return 'Image Size Should Be less Be Than 16mb';
  
	
	$file_des = $path .'/'. $file_name;

	$move = move_uploaded_file($file_tmp, $file_des);

	if(!$move){
	 	return "Sorry Failed To Upload Image!" ; 
	}else
	{ 
	
	}
}
	
?>
