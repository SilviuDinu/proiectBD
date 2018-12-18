<?php
/**
 * Created by PhpStorm.
 * User: Silviu
 * Date: 17.12.2018
 * Time: 16:21
 */

if(isset($_GET['add'])){
    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

//    TODO
//    $brand=$_GET['brand'];
//    $model=$_GET['model'];
//    $telefon=$_GET['telefon'];
//
//    mysqli_query($con,"INSERT INTO telefoane (brand_ID, starting_bid, last_bid, sistem_ID, model_ID, telefon) VALUES ('','0','0','','')");
}

?>