<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    exit('<h2>Hopa! Se pare ca te-ai pierdut. te rog fugi repejor</h2> <a href="index.php">ACASA</a>');
}
$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user=$_SESSION['utilizator'];
$r1=mysqli_query($con, "SELECT * FROM loggedin WHERE username='$user'");
mysqli_fetch_array($r1);
if(!(mysqli_num_rows($r1)>0))
{
    exit('<h2>Hopa! Se pare ca te-ai pierdut. te rog fugi </h2> <a href="index.php">ACASA</a>');
}
?>
<html>
<style>
    h1, h2 {
        text-align: center;
    }
    .container{
        width: 50%;
        margin: 0 auto;
        margin-top: 10vw !important;
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        z-index: -1;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height: auto;
    }
    </style>
<body background="tech.png">
<div class="container">
<?php

if(isset($_GET['details'])){
        $db="proiect";
        $username=$_SESSION["utilizator"];
//        $bid=$_SESSION["model"];
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result6 = mysqli_query($con, "SELECT COUNT(*) FROM users");
        $row6 = mysqli_fetch_array($result6);
        $result10 = mysqli_query($con, "SELECT COUNT(*) FROM telefoane");
        $row10 = mysqli_fetch_array($result10);
        $result7 = mysqli_query($con, "SELECT AVG(starting_bid) FROM telefoane");
        $row7 = mysqli_fetch_array($result7);
        $result9 = mysqli_query($con,"SELECT AVG(last_bid) FROM telefoane");
        $row9 = mysqli_fetch_array($result9);
        $result8 = mysqli_query($con,"SELECT * FROM users where ID=(SELECT MAX(ID) FROM users)");
        $row8 = mysqli_fetch_array($result8);
        echo "<h2>Momentan avem ".$row6[0]." utilizatori pe site-ul nostru.</h2>";
        echo "<h2>Avem ".$row10[0]." produse in stoc.</h2>";
        echo "<h2>Suma medie de inceput a produselor noastre este: ".round($row7[0],2). ' EURO.</h2>';
        echo '<h2>Media ultimelor sume licitate este: '.round($row9[0],2).' EURO.</h2>';
        echo "<h2>Numar total de conturi create: ".$row8[0].'</h2>';
}

?></div></body></h2></html>