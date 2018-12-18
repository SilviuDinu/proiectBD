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
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<style>
    h1, h2 {
        text-align: center;
        vertical-align: center;
        font-size: 18px;
    }
    .container{
        width: 50%;
        position: relative;
        margin: 0 auto;
        /*margin-top: 10vw !important;*/
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        top: 8%;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height: auto;
        font-size: 18px;
    }
    input{
        width: 25%;
        padding: 12px 20px;
        margin: 5px;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
        outline: none;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    /*div#myDiv{*/
        /*display: block;*/
        /*margin: 0 auto;*/
    /*}*/
    canvas.particles-js-canvas-el{
        position: absolute;
    }
    div#particles-js {
        background-color: #546398;
    }
    </style>
<body>
<script>
    function ShowDiv() {
        var x = document.getElementById("myDiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
<div class="container">
<?php

if(isset($_GET['details'])){
        $db="epiz_23148243_proiect";
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
        $r21=mysqli_query($con, "SELECT telefon FROM telefoane");
        $row21=mysqli_fetch_array($r21);
        $r22 = mysqli_query($con, "SELECT * FROM telefoane");
        $array=array();
        $arrayy=array();
        while($row22 = mysqli_fetch_array($r22)){
            $array[]=$row22['telefon'];
//            $r23=mysqli_query($con, "SELECT * FROM model WHERE model_ID=(SELECT model_ID FROM telefoane WHERE telefon='$array[]')");
//
//            while($row23 = mysqli_fetch_array($r23)){
//                $arrayy[]=$row23['nume_model'];
//            }
        }
////        $count=0;

//            $r23=mysqli_query($con, "SELECT model.nume_model, telefoane.telefon FROM model INNER JOIN telefoane ON model.model_ID=telefoane.model_ID");
//            while($row23=mysqli_fetch_array($r23))
//            {
//                $arrayy['nume_model']['telefon']=$row22['nume_model']['telefon'];
//            }


    $sql = "SELECT model.nume_model, telefoane.telefon FROM model INNER JOIN telefoane ON model.model_ID=telefoane.model_ID";

//runs '$sql' query to get database data
    $result = mysqli_query($con,$sql);

    $collNumber = mysqli_num_fields($result);

// Creates $data Array[]
    $data = array();

    while($row = mysqli_fetch_array($result)){
        //inserts received data into "$data" and makes available by array[]index
        $data[] = $row;
    }
    $tele=array_column($data, 0);
    $mode=array_column($data, 1);

    echo "<br><h2>Momentan avem ".$row6[0]." utilizatori pe site-ul nostru.<hr></h2>";
        echo "<h2>Avem ".$row10[0]." produse in stoc.<hr></h2>";
        echo "<h2>Suma medie de inceput a produselor noastre este: ".round($row7[0],2). ' EURO.<hr></h2>';
        echo '<h2>Media ultimelor sume licitate este: '.round($row9[0],2).' EURO.<hr></h2>';
        echo "<h2>Numar total de conturi create: ".$row8[0].'<hr></h2>';
}

?>

    <input type="button" name="answer" style="display: block; margin: 0 auto; margin-bottom: 5px" onclick="ShowDiv()" value="Stocul nostru"/>
    <div id="myDiv" style="display:none" class="stoc" >
        <h2>

                <?php echo $tele[0].' '.$mode[0]; ?>

                <?php echo '<br>'.$tele[1].' '.$mode[1]; ?>

                <?php echo '<br>'.$tele[2].' '.$mode[2]; ?>

                <?php echo '<br>'.$tele[3].' '.$mode[3]; ?>

                <?php echo '<br>'.$tele[4].' '.$mode[4]; ?>

                <?php echo '<br>'.$tele[5].' '.$mode[5]; ?>

                <?php echo '<br>'.$tele[6].' '.$mode[6]; ?>

                <?php echo '<br>'.$tele[7].' '.$mode[7]; ?>
        </h2>
    </div>

</div>
</div></body></h2></html>