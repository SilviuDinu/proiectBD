<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<body background="tech.png">
<style>
     p:not(#demo){
        text-align: center;
        top:30%;
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: inherit;
        font-size: 30px;
        position:absolute;
        z-index: 100;
        left: 0;
        right: 0;
        bottom: 0;
        width: 50%;
        margin: 0 auto;
    }
    body{
        background-size: cover;

    }
    p#demo{
        position:absolute;
       top: 10%;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: center;
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: inherit;
        font-size: 30px;
    }
    @media only screen and (max-width: 768px){
        .xmark{
            width: 15%;
            height: auto;
            position:absolute;
            margin: 0 auto;
            top: -17% !important;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .checkmark{
            width: 15%;
            height: auto;
            position:absolute;
            margin: 0 auto;
            top: -12% !important;
            left: 0;
            right: 0;
            bottom: 0;
        }
        p:not(#demo){
            text-align: center;
            top:30%;
            font-family: "Libre Baskerville", Sans-serif;
            font-weight: inherit;
            font-size: 27px;
            position:absolute;
            z-index: 100;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            margin: 0 auto;
        }
    }
    .xmark{
        width: 15%;
        height: auto;
        position:absolute;
        margin: 0 auto;
        top: 35%;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .checkmark{
        width: 15%;
        height: auto;
        position:absolute;
        margin: 0 auto;
        top: 20%;
        left: 0;
        right: 0;
        bottom: 0;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
        min-height: 100%;
        overflow-x: scroll;

    }
    div#particles-js {
        background-color: #546398;
        min-height: 100%;
        overflow-x: scroll;
    }
</style>
<meta http-equiv="refresh" content="50;url=session_expired.php" />
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
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
</div>

<p>
    <?php
    $db="epiz_23148243_epiz_23148243_proiect";
    $suma=$_GET['suma'];
    session_start();
    $telefon11 = $_SESSION['telefon'];
    $model1 = $_SESSION['model'];
    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    echo 'Ati licitat suma de <strong>'.$suma.'</strong> EURO pentru '.$model1.' '.$telefon11;
    $result0 = mysqli_query($con,"SELECT * FROM telefoane WHERE telefon = '$telefon11'");
    $row0 = mysqli_fetch_array($result0);
    $nr=$row0[0];
    $_SESSION['nuru']=$nr;
    $fiinta=$_SESSION['utilizator'];
    $result1 = mysqli_query($con, "SELECT * FROM telefoane WHERE telefon = (SELECT telefon FROM telefoane WHERE phone_ID='$nr')");
    $row1 = mysqli_fetch_array($result1);

    if ($suma > $row1[2] && $suma > $row1[3]){
        mysqli_query($con,"UPDATE telefoane SET last_bid = $suma WHERE phone_ID = $nr AND model_ID = (SELECT model.model_ID FROM model WHERE nume_model='$model1' AND telefon='$telefon11')");
        $src='checkmark.png';
        echo '<img class="checkmark" src="' . $src . '">';
        mysqli_query($con, "INSERT INTO licitatii (utilizator, suma, telefon) VALUES ('$fiinta', '$suma', '$telefon11')");
           if(count($suma) > 5 ){
echo 'Pentru ca suma depaseste 5 cifre, nu va fi luata in considerare pentru ca nimeni nu ar licita peste 99999 EURO, sa fim seriosi';
}
        $_SESSION['suma']=$suma;
    }
    else {
        echo 'Suma introdusa nu este suficient de mare, va rog introduceti o suma mai mare decat suma de inceput si decat ultima suma licitata';
        echo "<br>Suma de inceput este: <strong>". $row1[2].'</strong> EURO';
        echo '<br>Ultima suma inregistrata este: <strong>'.$row1[3].'</strong> EURO';
        $src='xmark.png';
        echo '<img class="xmark" src="' . $src . '">';
    }
    echo '<a href="stock.php"><br>Inapoi la Licitatie</a>';
    echo '<meta http-equiv="refresh" content="3;url=stock.php" />';
    ?>
</p>
</div>
</body>
</html>
			