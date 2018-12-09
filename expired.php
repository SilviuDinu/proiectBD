<html>
<head>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/my.js"></script>
    </head>
</head>
<style>
    h1, h2 {
        text-align: center;
    }
    .checkmark{
        width: 10%;
        height: auto;
        position: absolute;
        top: 4vw;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    .container{
    width: 75%;
    margin: 0 auto;
    margin-top: 15vw !important;
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
<h1>
    <?php
    session_start();
    $tel=$_SESSION['telefon'];
    $sum= $_SESSION['suma'];
    $om=$_SESSION["utilizator"];
    session_abort();
    echo 'Licitatia pe care o urmareati a expirat, va rog sa va relogati pentru a participa la altele.';
    $db="id8182920_proiect";
    $con=mysqli_connect("localhost", "id8182920_root", "parola123", "id8182920_proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result1 = mysqli_query($con, "SELECT * FROM telefoane WHERE telefon = '$tel'");
    $result11= mysqli_query($con, "SELECT * FROM model WHERE model_ID = (SELECT model_ID FROM telefoane where telefon='$tel')");
    $row1 = mysqli_fetch_array($result1);
    $row11 = mysqli_fetch_array($result11);
    if ($sum > $row1[2] && $sum == $row1[3]){
        $src='exclamation.png';
        echo '<img class="checkmark" src="' . $src . '">';
        echo '<h2>Se pare ca cea mai mare suma este: '.$row1[3].' EURO pentru '.$row11[1].' '.$tel.'. Castigatorul va fi contactat';
    }
    ?>
</h1>
<h2><a href="index.php">Acasa</a></h2>
</div>
</body>
</html>