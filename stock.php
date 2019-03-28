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
//$r1=mysqli_query($con, "SELECT * FROM loggedin WHERE username='$user'");
//mysqli_fetch_array($r1);
//if(!(mysqli_num_rows($r1)>0))
//{
//    exit('<h2>Hopa! Se pare ca te-ai pierdut. te rog fugi </h2> <a href="index.php">ACASA</a>');
//}
$brand=$_SESSION['brand'];
$model=$_SESSION['model'];
$telefon=$_SESSION['telefon'];
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>

<body background="tech.png">
<style>
    .holder{
        width: 75%;
        position: relative;
        margin: 0 auto;
        /*margin-top: 10vw !important;*/
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/

        height: auto;
        font-size: 18px;
    }
    /*.holder h1{*/
        /*text-align: center;*/
    /*}*/
    input[type=number]:focus {
        background-color: lightskyblue;
        outline: none;
    }

    input[type=submit] {
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
        height: 50px;
        width: 150px;
    }
    @media (min-width: 1367px){
        input[type=submit] {
            border-radius: 30px;
            box-sizing: border-box;
            border: 5px solid #50afc3;
            height: 50px;
            width: 150px;
            margin-top: 20px;
        }
    }
    input[type=number]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
        text-align: center;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
        height: 50px;
    }
    @media (min-width: 1367px){
        input[type=number]{
            transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in;
            text-align: center;
            border-radius: 30px;
            box-sizing: border-box;
            border: 5px solid #50afc3;
            height: 50px;
            margin-top: 20px;
        }
    }
    form{
        /*position:absolute;*/
        /*top:10%;*/
        /*right:0;*/
        /*left:0;*/
        /*width: 50%;*/
        /*margin: 0 auto;*/
        text-align: center;
    }
    @media (min-width: 1367px) {
        form {
            /*position:absolute;*/
            /*top:10%;*/
            /*right:0;*/
            /*left:0;*/
            /*width: 50%;*/
            /*margin: 0 auto;*/
            text-align: center;
            margin-top: 20px;
        }
    }
    body{
        background-size: cover;
    }
    @media (min-width: 1367px){
        p#demo{
            margin-top: 20px;
        }
    }
    @media (min-width: 1367px){
        p{
            margin-top: 20px;
        }
    }
    h1, p{
        text-align: center;
        z-index: -100;
    }
    h1{
        font-size: 28px;

    }
    @media (min-width: 1367px) {
        .iphone, .samsung, .oneplus {
            width: 20%;
            position: relative;
            margin: 0 auto;
            margin-top: 20px;
            display: block;
            /*margin-top: 20vw;*/
            /*transition: width 2s;*/
            /*-webkit-transition: width 2s; !* Safari 3.1 to 6.0 *!*/
            -webkit-transition: -webkit-transform 1s ease-in-out;
            transition: transform 1s ease-in-out;
        }
    }
    @media (max-width: 1366px) {
        .iphone, .samsung, .oneplus {
            width: 15%;
            position: relative;
            margin: 0 auto;
            display: block;
            /*margin-top: 20vw;*/
            /*transition: width 2s;*/
            /*-webkit-transition: width 2s; !* Safari 3.1 to 6.0 *!*/
            -webkit-transition: -webkit-transform 1s ease-in-out;
            transition: transform 1s ease-in-out;
        }
    }
    .iphone:hover, .samsung:hover, .oneplus:hover{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    /*.pic{*/
        /*margin: 0 auto;*/
        /*width: 90%*/
    /*}*/
    p {
        font-size: 22px;
    }
    h2{
        text-align: center;
        font-size: 24px;
    }
    #participa{
        display: block;
        margin: 0 auto;
        outline: none;
    }
    canvas.particles-js-canvas-el{
        position: absolute;

    }
    div#particles-js {
        background-color: #546398;
    }
</style>
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
<div class="holder" style="position: relative"><h1>Telefonul <?php echo $model.' '.$telefon.' de la brand-ul '.$brand;?> e disponibil</h1><br>
    <p style="font-size: 22px"><?php
        $telefon11 = $_SESSION['telefon'];
        $model1 = $_SESSION['model'];
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result5 = mysqli_query($con," SELECT COUNT(*) FROM telefoane WHERE model_ID=(SELECT model.model_ID FROM model WHERE nume_model='$model1')");
        $row5 = mysqli_fetch_array($result5);
        $stoc=$row5[0];
        $result0 = mysqli_query($con,"SELECT * FROM telefoane WHERE telefon = '$telefon11' AND model_ID = (SELECT model.model_ID FROM model WHERE nume_model='$model1')");
        $row0 = mysqli_fetch_array($result0);
        $nr=$row0[0];
        $result88 = mysqli_query($con,"SELECT COUNT(DISTINCT utilizator) FROM licitatii WHERE telefon='$telefon'");
        $row88=mysqli_fetch_array($result88);
        if($row88 == null){
        $row88[0]=0;
        }
        echo "Momentan exista <strong>".$stoc.'</strong> telefoane de tip '.$model1.' in stoc. Inca '.$row88[0].' pers mai liciteaza la acest tel.';
      
        $result1 = mysqli_query($con, "SELECT * FROM telefoane WHERE telefon = (SELECT telefon FROM telefoane WHERE phone_ID='$nr')");
        $row1= mysqli_fetch_array($result1);
        echo "<br>Suma de inceput este: <strong>". $row1[2].'</strong> EURO';
        echo '<br>Ultima suma licitata este: <strong>'.$row1[3].'</strong> EURO';
        ?>
    </p><br>
    <h2>Timp ramas:</h2>
    <p id="demo"></p>
    <script>
      setInterval(function () {
            var d = new Date(); //get current time
            var seconds = d.getMinutes() * 60 + d.getSeconds(); //convet current mm:ss to seconds for easier caculation, we don't care hours.
            var fiveMin = 60*2; //five minutes is 300 seconds!
            var timeleft = fiveMin - seconds % fiveMin; // let's say now is 01:30, then current seconds is 60+30 = 90. And 90%300 = 90, finally 300-90 = 210. That's the time left!
            var result = parseInt(timeleft / 60) + ':' + timeleft % 60; //formart seconds back into mm:ss
          document.getElementById('demo').innerHTML = result;
          if(timeleft <= 1) window.location="expired.php";
        }, 1000);
    </script>
    <form action="products1.php" method="get" id="sum" onsubmit="myFunction()">
        <label for="suma"><strong><p><br>Aapasati <a href="welcome.php">aici</a> pentru a efectua alta operatiune</p></strong></label><br>
        <input type="number" placeholder="Introduceti Suma" id="suma" pattern="^[0-9]{1,5}$" name="suma">
        <input type="submit"  id="insert" name="insert" value="Liciteaza">
</div>
<div class="pic" style="position: relative; "><br><?php
    $src=null;
    if($brand=='Oneplus' || $model=='Oneplus'){
        $src='oneplus.png';
        echo '<img class="oneplus" src="' . $src . '">';
    }
    if($model=='Galaxy' || $model=='galaxy'){
        $src='samsung.png';
        echo '<img class="samsung" src="' . $src . '">';
    }
    if($model=='Iphone' || $model=='iphone'){
        $src='iphone.png';
        echo '<img class="iphone" src="' . $src . '">';
    }
//    if($src==null)
//    {
//        header('Location: session_expired.php')
//    }

    ?></div>

<div id="display_here"></div>

</div>
</body>

</html>				