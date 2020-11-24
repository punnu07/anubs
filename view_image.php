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
echo "<a href=control_panel.html>back</a>";

?> 
