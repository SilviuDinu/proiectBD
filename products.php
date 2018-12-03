<?php
$db="proiect";

$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$brand=$_POST['telefoane'];
$model=$_POST['model'];
$telefon=$_POST['telefon'];
$brand=ucfirst($brand);

$result = mysqli_query($con,"SELECT * FROM telefoane WHERE brand='$brand' and model='$model' and telefon='$telefon'");
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0 ) { //check if there is already an entry for that username
    include 'stock.php';
}
else {
    include 'nostock.php';
}


?>