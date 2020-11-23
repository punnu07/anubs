 <?php
 $servername = 'localhost:8889';
 $mysqli = new mysqli($servername,"root","tiger","anubs");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "select * from admin;";
$result -> $mysqli -> query($sql);

// Numeric array
$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);


$mysqli -> close();
?>

