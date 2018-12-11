<html>
<body background="tech.png">
<style>
    p{
        text-align: center;
        margin-top: 15vw;
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: inherit;
        font-size: 30px;
    }
    body{
        background-size: cover;
    }
    .xmark, .checkmark{
        width: 10%;
        height: auto;
        position: absolute;
        top: 4vw;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
</style>
<meta http-equiv="refresh" content="8;url=session_expired.php" />
<p>
    <?php
    $db="proiect";
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
        mysqli_query($con,"UPDATE telefoane SET last_bid = $suma WHERE phone_ID = $nr AND model_ID = (SELECT model.model_ID FROM model WHERE nume_model='$model1')");
        $src='checkmark.png';
        echo '<img class="checkmark" src="' . $src . '">';
        mysqli_query($con, "INSERT INTO licitatii (utilizator, suma, telefon) VALUES ('$fiinta', '$suma', '$telefon11')");
        $_SESSION['suma']=$suma;
    }
    else {
        echo '<br>Suma introdusa nu este suficient de mare, va rog introduceti o suma mai mare<br> decat suma de inceput si decat ultima suma licitata';
        echo "<br>Suma de inceput este: <strong>". $row1[2].'</strong> EURO';
        echo '<br>Ultima suma licitata care a depasit suma de inceput este: <strong>'.$row1[3].'</strong> EURO';
        $src='xmark.png';
        echo '<img class="xmark" src="' . $src . '">';
    }
    ?>
</p>
</body>
</html>
