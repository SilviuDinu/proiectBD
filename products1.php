<html>
<body background="sea.jpg">

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
</style>
<meta http-equiv="refresh" content="8;url=session_expired.php" />
<p>
    <?php
    $db="proiect";
    session_start();
    $model1 = $_SESSION['model'];

    if($model1=='Galaxy' || $model1=='galaxy')
    {
        $nr=2;
    }
    else if($model1=='Iphone' || $model1=='iphone')
    {
        $nr=3;
    }
    else if($model1=='Oneplus' || $model1=='oneplus')
    {
        $nr=4;
    }

    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $suma=$_POST['suma'];
    echo 'Ati licitat suma de <strong>'.$suma.'</strong> EURO pentru '.$model1;


    $result1 = mysqli_query($con,"SELECT starting_bid FROM telefoane WHERE phone_ID = $nr");
    $row1 = mysqli_fetch_array($result1);
    $result2 = mysqli_query($con,"SELECT last_bid FROM telefoane WHERE phone_ID = $nr");
    //echo $result;
    $row2 = mysqli_fetch_array($result2);
    if ($suma > $row1[0] && $suma > $row2[0]){
        mysqli_query($con,"UPDATE telefoane SET last_bid = $suma WHERE phone_ID = $nr");
    }
    else {
        echo '<br>Suma introdusa nu este suficient de mare, va rog introduceti o suma mai mare<br> decat suma de inceput si decat ultima suma licitata';
        echo "<br>Suma de inceput este: <strong>". $row1[0].'</strong> EURO';
        echo '<br>Ultima suma licitata care a depasit suma de inceput este: <strong>'.$row2[0].'</strong> EURO';
    }


    //On page 2


    ?>
</p>
</body>
</html>
