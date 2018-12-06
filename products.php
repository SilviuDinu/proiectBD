<?php
$db="proiect";

$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$brand=$_POST['telefoane'];
$model=$_POST['model'];
session_start();
//On page 1
$telefon=$_POST['telefon'];
$_SESSION['model'] = $model;
$_SESSION['telefon'] = $telefon;
$brand=ucfirst($brand);
$brand_ID=null;
$phone_ID=null;
$model_ID=null;
//if(($brand=='Samsung' && $model=='Galaxy' && $telefon=='S9') || ($brand=='Samsung' && $model=='galaxy' && $telefon=='S9'))
//{
//    $brand_ID=1;
//    $phone_ID=1;
//    $model_ID=1;
//}
//else if(($brand=='Apple' && $model=='Iphone' && $telefon=='X') || ($brand=='Apple' && $model=='iphone' && $telefon=='X'))
//{
//    $brand_ID=2;
//    $phone_ID=2;
//    $model_ID=2;
//}
//else if(($brand=='Oneplus' && $model=='Oneplus' && $telefon=='6') || ($brand=='Oneplus' && $model=='oneplus' && $telefon=='6'))
//{
//    $brand_ID=3;
//    $phone_ID=3;
//    $model_ID=3;
//}
$result0 = mysqli_query($con,"SELECT * FROM telefoane WHERE telefon='$telefon'");
$row0 = mysqli_fetch_array($result0);
$result00 = mysqli_query($con,"SELECT * FROM model WHERE model='$model'");
$row00 = mysqli_fetch_array($result00);
$result000 = mysqli_query($con,"SELECT * FROM brand WHERE brand='$brand'");
$row000 = mysqli_fetch_array($result000);
//echo $row0[0].$row00[0].$row000[0];
if($row0[0]==$row00[0] && $row0[0]==$row000[0]&& $row00[0]==$row000[0]){
    $brand_ID=$row000[0];
    $phone_ID=$row0[0];
    $model_ID=$row00[0];
}

$result1 = mysqli_query($con,"SELECT * FROM brand WHERE brand_ID='$brand_ID'");
$result2 = mysqli_query($con,"SELECT * FROM model WHERE model_ID='$model_ID'");
$result3 = mysqli_query($con,"SELECT * FROM telefoane WHERE phone_ID='$phone_ID'");

//echo $brand_ID.$model_ID.$phone_ID;

if(mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0) {
    echo $brand_ID.$model_ID.$phone_ID;
    include 'stock.php';
}
else {
    echo $brand_ID.$model_ID.$phone_ID;
    include 'nostock.php';
}


?>