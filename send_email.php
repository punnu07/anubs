

<html>
<head> </head>
<body>

Message sent
 
 

<?php


if($_POST["message"]) 
{
 mail("punnoose07@gmail.com", "Here is the subject line",$_POST["message"], "From: anubscounselling.com");
 
sleep(3);
header("Location:index.html");


}

?>




</body>
</html>
