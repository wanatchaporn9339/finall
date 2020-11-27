<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070241', 'DMLbmk22', 'it63070241_lab', 3306);
if (mysqli_connect_errno($conn))
{
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$h = $_POST['height'];
$w = $_POST['weight'];
$bmi = $w / $w*2;

$sql = "INSERT INTO bmi (height , weight , bmi) VALUES ('$h', '$w', '$bmi')";

if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
