<html>
<head>
    <meta http-equiv="refresh" content="3;URL='welcome.php'" />
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<style>
    p {
        text-align: center;
        font-size: 24px;
        margin: 0 auto;
        margin-top: 3% !important;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
    }
    div#particles-js {
        background-color: #546398;
    }
    .container{
        width: 37%;
        position: relative;
        margin: 0 auto;
        /* margin-top: 10vw !important; */
        /* background-image: linear-gradient(lightskyblue , whitesmoke); */
        background-color: rgba(255,255,255,0.75);
        top: 15vw;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height: 8%;
        font-size: 18px;
    }
</style>
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
    <div class="container">
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
    $brand=$_GET['brand'];
    $model=$_GET['model'];
    $telefon=$_GET['telefon'];
    $res=mysqli_query($con, "SELECT model_ID FROM model WHERE nume_model='$model'");
    $rows=mysqli_fetch_array($res);
    $res1=mysqli_query($con, "SELECT brand_ID FROM brand WHERE nume_brand='$brand'");
    $rows1=mysqli_fetch_array($res1);
    if($model=='Oneplus' || $model=='Galaxy'){
        $sistem=1;
    }
    else if($model=='Iphone'){
        $sistem=2;
    }
    mysqli_query($con,"INSERT INTO telefoane (brand_ID, starting_bid, last_bid, sistem_ID, model_ID, telefon) VALUES ('$rows1[0]','0','0','$sistem','$rows[0]','$telefon')");
    echo '<p>Telefonul '.$model.' '.$telefon.' de la '.$brand.' a fost adaugat in stoc</p>';
}

if(isset($_GET['sterge'])){
    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

//    TODO
    $brand=$_GET['brand'];
    $model=$_GET['model'];
    $telefon=$_GET['telefon'];
    $res=mysqli_query($con, "SELECT model_ID FROM model WHERE nume_model='$model'");
    $rows=mysqli_fetch_array($res);
    $res1=mysqli_query($con, "SELECT brand_ID FROM brand WHERE nume_brand='$brand'");
    $rows1=mysqli_fetch_array($res1);
    if($model=='Oneplus' || $model=='Galaxy'){
        $sistem=1;
    }
    else if($model=='Iphone'){
        $sistem=2;
    }
    mysqli_query($con,"DELETE FROM telefoane WHERE brand_ID='$rows1[0]' AND model_ID='$rows[0]' and telefon='$telefon'");
    echo '<p>Telefonul '.$model.' '.$telefon.' de la '.$brand.' a fost STERS din stoc</p>';
}

?>
    </div>
</div>
</html>
