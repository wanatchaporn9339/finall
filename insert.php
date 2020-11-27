<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070241', 'DMLbmk22', 'it63070241_lab', 3306);
if (mysqli_connect_errno($conn))
{
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$h = $_POST['height'];
$w = $_POST['weight'];
$bmi= ($weight)/(($height/100)*($height/100));

$sql = "UPDATE bmi SET height='$h' , weight='$w' , bmi='$w' name='name' WHERE id='$id';

if (mysqli_query($conn, $sql)) {
header("location:show.php");
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
