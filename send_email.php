



 

<?php

if($_POST["message"]) 
{
 mail("punnoose07@gmail.com", "Here is the subject line",$_POST["message"], "From: anubscounselling.com");
 




echo "<html>";
echo "<head> </head>";
echo "<body>";
echo "Message sent";
echo "</body>";
echo "</html>";

sleep(3);
header("Location:index.html");


}

?>




