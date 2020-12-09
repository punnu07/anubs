

<html>
<head> </head>
<body>

Message sent
 
 

<?php


if($_POST["message"]) 
{
 mail("anubpanaveli@gmail.com", "Here is the subject line",$_POST["message"], "From: anubscounselling.com");
 
sleep(3);
header("Location:index.php");


}

?>




</body>
</html>
