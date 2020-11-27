<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070241', 'DMLbmk22', 'it63070241_lab', 3306);
if (mysqli_connect_errno($conn))
{
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_POST['A'];
$B = $_POST['B'];
$C = $A + $B;

$sql = "INSERT INTO exlap (A , B , C) VALUES ('$A', '$B', '$C')";

if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
