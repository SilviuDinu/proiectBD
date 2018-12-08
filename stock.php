<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /*.holder{*/

        /*margin: 0 auto;*/
    /*}*/
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
        border: 5px solid #ccc;
        height: 50px;
        width: 150px;
    }
    input[type=number]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
        text-align: center;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #ccc;
        height: 50px;
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
    body{
        background-size: cover;
    }
    h1, p{
        text-align: center;
    }
    .iphone, .samsung, .oneplus{
        width: 22%;
        height: auto;
        margin: 0 auto;
        display: block;
        overflow: hidden;
        /*margin-top: 20vw;*/
        /*transition: width 2s;*/
        /*-webkit-transition: width 2s; !* Safari 3.1 to 6.0 *!*/
        -webkit-transition: -webkit-transform 1s ease-in-out;
        transition:         transform 1s ease-in-out;
    }


    .iphone:hover, .samsung:hover, .oneplus:hover{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    .pic{
        margin: 0 auto;
        width: 90%
    }
    p {
        font-size: 25px;
    }
    h2{
        text-align: center;
    }
    #participa{
        display: block;
        margin: 0 auto;
        /*border-radius: 30px;*/
        /*box-sizing: border-box;*/
        /*border: 5px solid #ccc;*/
        /*height: 50px;*/
        /*width: 150px;*/
        outline: none;
    }
</style>

<body background="tech.png">

<div class="holder"><h1>Telefonul <?php echo $model.' '.$telefon.' de la brand-ul '.$brand;?> exista in stoc</h1>

    <p style="font-size: 25px"><?php
        $telefon11 = $_SESSION['telefon'];
        $model1 = $_SESSION['model'];
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result0 = mysqli_query($con,"SELECT * FROM telefoane WHERE telefon = '$telefon11'");
        $row0 = mysqli_fetch_array($result0);
        $nr=$row0[0];
        $result1 = mysqli_query($con,"SELECT starting_bid FROM telefoane WHERE phone_ID = $nr");
        $row1 = mysqli_fetch_array($result1);
        $result2 = mysqli_query($con,"SELECT last_bid FROM telefoane WHERE phone_ID = $nr");
        //echo $result;
        $row2 = mysqli_fetch_array($result2);
        echo "Suma de inceput este: <strong>". $row1[0].'</strong> EURO';
        echo '<br>Ultima suma licitata este: <strong>'.$row2[0].'</strong> EURO';
        ?>
    </p>
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
        <label for="suma"><strong><p>Introduceti suma pe care doriti sa o licitati, sau apasati <a href="index.php">aici</a> pentru a va deloga. Atentie, suma este in EURO</p></strong></label><br><br>
        <input type="number" placeholder="Introduceti Suma" id="suma" name="suma"><br><br>
        <input type="submit"  id="insert" name="insert" value="Liciteaza">
</div>
<div class="pic"><?php
    $src=null;
    if($telefon=='6' && $brand=='Oneplus'){
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
    if($src==null)
    {
        include 'session_expired.php';
    }

    ?></div>

<div id="display_here"></div>


</body>

</html>