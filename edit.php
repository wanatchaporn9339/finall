<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070241', 'DMLbmk22', 'it63070241_lab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id=$_GET['id'];
$name=$_GET['name'];
$weight=$_GET['weight'];
$height=$_REQUEST['height'];
$bmi= ($weight)/(($height/100)*($height/100));
$sql = "UPDATE INTO bmi (height , weight , bmi) VALUES ('$height', '$weight', '$bmi')";

if (mysqli_query($conn, $sql)) {
header('location:show.php');
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
