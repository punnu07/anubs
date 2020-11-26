<?php
$dir = "img/";
$fn=$dir.$_POST['delete_file_name'];

$a=unlink($fn);
if($a==FALSE)
{
	echo "Unable to delete <br>";
}
else
{
	echo "Deleted ".$_POST['delete_file_name'];
}
echo "<br><br>";
echo "<a href=control_panel.php>back</a>";


?>
