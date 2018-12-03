<?php
$db="proiect";

$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$brand=$_POST['telefoane'];
$model=$_POST['model'];
//On page 1
session_start();
$_SESSION['model'] = $model;
$telefon=$_POST['telefon'];
$brand=ucfirst($brand);
$brand_ID=null;
$phone_ID=null;
$model_ID=null;
if(($brand=='Samsung' && $model=='Galaxy' && $telefon=='S9') || ($brand=='Samsung' && $model=='galaxy' && $telefon=='S9'))
{
    $brand_ID=1;
    $phone_ID=2;
    $model_ID=1;
}
else if(($brand=='Apple' && $model=='Iphone' && $telefon=='X') || ($brand=='Apple' && $model=='iphone' && $telefon=='X'))
{
    $brand_ID=2;
    $phone_ID=3;
    $model_ID=2;
}
else if(($brand=='Oneplus' && $model=='Oneplus' && $telefon=='6') || ($brand=='Oneplus' && $model=='oneplus' && $telefon=='6'))
{
    $brand_ID=3;
    $phone_ID=4;
    $model_ID=3;
}

$result1 = mysqli_query($con,"SELECT * FROM brand WHERE brand_ID='$brand_ID'");
$result2 = mysqli_query($con,"SELECT * FROM model WHERE model_ID='$model_ID'");
$result3 = mysqli_query($con,"SELECT * FROM telefoane WHERE phone_ID='$phone_ID'");
$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);

if(mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0) { //check if there is already an entry for that username
    include 'stock.php';
}
else {
    include 'nostock.php';
}


?>