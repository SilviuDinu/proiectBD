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
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<style>
     body {
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: 50;
    }

    @media (min-width: 250px) and (max-width: 768px){
        .container{
            width: 100% !important;
            float: none;
            text-align: center;
            position: relative;
        }
        .is-right{
            padding-top: 8px;
            width: 100% !important;
            float: none;
            position: relative;
        }
        h1, h2{
            font-size: 18px !important;
        }
        input{
            box-sizing: border-box;
            border: 5px solid #50afc3;
            border-radius: 20px !important;
            outline: none;
            padding: 6px !important;
            width: 25% !important;
        }
        input#search{
            width: 30% !important;
        }
        input[type=text]{
            padding: 8px !important;
            width: 62% !important;
        }
        input[type=text]{
            width: 65% !important;
            height: 32px !important;
        }
        p{
            font-size: 14px !important;
        }
    }
    * {
        box-sizing: border-box;
    }
    input[type=submit]{
        width: auto;
        margin-left: 10%;
    }
    p{
        margin-left: 10%;
    }
    @media (max-height: 900px){
        hr{
            display: none !important;
        }
        form#add{
            height: 23% !important;
        }
        #doc{
            width: 100%;
            margin: 0 auto;
            margin-top: 0px;
        }
    }

    input {
        padding: 12px 20px;
        border-radius: 30px;
        box-sizing: border-box;
        outline: none;
        margin-bottom: 10px;
    }
    @media (min-width: 769px) {
        .container {
            width: 75%;
            margin: 0 0 0 auto;
            float: right;
            height: auto;
            position: relative;
        }

        .is-right {
            width: 22.5%;
            float: left;
            height: auto;
            position: absolute;
        }
    }
    .container{
        background-color: rgba(255, 255, 255, 0.82);
        z-index: 0;
        border-radius: 25px;
        border: 5px solid #50afc3;
        margin-top: 10px;
    }

     input[type=submit]{
       min-height: 50px !important;
    }

    .is-right{
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255, 255, 255, 0.82);
        z-index: 0;
        border-radius: 25px;
        border: 5px solid #50afc3;
        margin-top: 10px;
    }
    .description, ul, li, p:not(#log){
        width: 33.33%;
        margin: 0 auto;
        float: left;
        text-align: center;
    }
    p#description2{
        width: 33.33%;
        margin: 0 auto;

        text-align: center;
    }
    p#description3{
        width: 33.33%;
        text-align: center;
        margin: 0 auto;
    }
    #model{
        width: 50%;
    }
    #telefon{
        width: 50%;
    }
    body, p {
        font-family: "Libre Baskerville", Sans-serif;
    }
    h2, h1{
        text-align: center;  font-weight: normal;
        font-size: 30px;
    }
    /*#video {*/
    /*position: fixed;*/
    /*right: 0;*/
    /*bottom: 0;*/
    /*min-width: 100%;*/
    /*min-height: 100%;*/
    /*z-index: -6;*/
    /*}*/
    #doc{
        width: 100%;
        margin: 0 auto;
        margin-top: 35px;
    }
    select{
        /*margin-left: 5%;*/
        /*margin-right: 90%;*/
        height: 30px;

        text-align: center;
        font: inherit !important;
    }
    input#search, input#add, input#sterge{
        width: 15%;
        display: block;
        margin: 10px auto;
    }
    input[type=text]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input[type=password]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input {
        width: 12%;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;

    }
    input[type=text],input[type=password]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
    }
    button {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
        margin: 5px;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
        min-height: 100%;
        overflow: hidden;

    }
    div#particles-js {
        background-color: #546398;
        min-height: 100%;
        overflow-x: scroll;
    }
    p{
        font-size: 16px;
        margin-bottom: 10px;
    }
   
</style>
<body>
<!--<video autoplay muted loop id="video">-->
<!--    <source src="tech.mp4" type="video/mp4">-->
<!--    Your browser does not support HTML5 video.-->
<!--</video>-->
<div id="particles-js">
<script src="particles.js/particles.js"></script>
<script src="particles.js/demo/js/app.js"></script>

<!-- stats.js -->
<script src="particles.js/demo/js/lib/stats.js"></script>
<div class="is-right">
<form action="logout.php" method="post">
    <p id="log"><?php echo 'Sunteti logat cu username-ul ';?><strong style="font-size: 25px; font-style: italic;"><?php echo $_SESSION["utilizator"];?></strong><?php echo ', bine ai venit!';?><br><br>Doriti sa va delogati? Apasati butonul de mai jos:</p>
    <input type="submit" name="logout" value="Logout">
    <hr>
    <p id="log">Doriti sa va stergeti contul?</p>
    <input type="submit" name="delete" value="Delete">
    <hr>
    <p id="log">
        <?php
        $username=$_SESSION["utilizator"];
        $db="epiz_23148243_proiect";
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $i=0;
        $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
                while($row = mysqli_fetch_array($result)) {
                    $i++;
                        switch ($i) {
                            case "1":
                                echo "Username: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "2":
                                echo "<br>Password: ";
                                echo '<a href="forgot.php">Am uitat parola</a>'; 
                                $i++;
                            case "3":
                                echo "<br>Nume: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "4":
                                echo "<br>Prenume: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "5":
                                echo "<br>Email: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                        }
                }
        ?>
    </p>
</form>
<form action="new_user.php" method="post">
    <input type="submit" name="modifica" id="modifica" value="Modifica">
</form><hr>
    <p id="log">Detalii despre site-ul nostru</p>
    <form action="details.php" method="get">
        <input type="submit" name="details"  id="details"  value="Detalii">
    </form>
</div>
<div class="container">
    <h1><?php
        $db="epiz_23148243_proiect";
        $username=$_SESSION["utilizator"];
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        echo 'Salut, '.$_SESSION["utilizator"].', bine ai venit!';
        ?></h1>
    <h2>Alegeti produsul la care doriti sa licitati</h2>
    <form action="products.php" method="get" id="doc"><p class="description">Selectati brand-ul dorit: <br><br><select name="telefoane">
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Oneplus">Oneplus</option>
            </select></p>
        <p id="description2">Selectati modelul dorit:<br><br><select name="model">
            <option value="Iphone">Iphone</option>
            <option value="Galaxy">Galaxy</option>
                <option value="Oneplus">Oneplus</option></select></p>
<!--            <input type="text" placeholder="Model telefon" id="model" pattern="[A-Za-z0-9]+" name="model"></p>-->
        <p id="description3">Selectati telefonul dorit:
            <br><br>
            <input type="text" placeholder="Nume Telefon" id="telefon" pattern="[A-Za-z0-9]+" title="Va rog doar caractere alfa-numerice" name="telefon"><br><br></p>
       
        <input type="submit" id="search" name="search" value="Cauta">
    </form>

    <?php
        if($_SESSION['utilizator']=='admin'){
            echo '<br><hr><form action="add.php" method="get" id="add"><p class="description">Adaugati brand: <br><select name="brand" style="height: 20px;">
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Oneplus">Oneplus</option>
            </select></p>
        <p id="description2">Adaugati model:<br><select name="model" style="height: 20px;">
                <option value="Iphone">Iphone</option>
                <option value="Galaxy">Galaxy</option>
                <option value="Oneplus">Oneplus</option></select></p>
        <!--            <input type="text" placeholder="Model telefon" id="model" pattern="[A-Za-z0-9]+" name="model"></p>-->
        <p id="description3">Adaugati telefon:
            <br>
            <input type="text" placeholder="Nume Telefon" id="telefon" pattern="[A-Za-z0-9]+" title="Va rog doar caractere alfa-numerice" name="telefon"></p>
        
        <input type="submit" id="add" name="add" value="Adauga in stoc">
    </form>';
            echo '<br><hr><form action="add.php" method="get" id="add"><p class="description">Stergeti brand: <br><select name="brand" style="height: 20px;">
                <option value="Apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Oneplus">Oneplus</option>
            </select></p>
        <p id="description2">Stergeti model:<br><select name="model" style="height: 20px;">
                <option value="Iphone">Iphone</option>
                <option value="Galaxy">Galaxy</option>
                <option value="Oneplus">Oneplus</option></select></p>
        <!--            <input type="text" placeholder="Model telefon" id="model" pattern="[A-Za-z0-9]+" name="model"></p>-->
        <p id="description3">Stergeti telefon:
            <br>
            <input type="text" placeholder="Nume Telefon" id="telefon" pattern="[A-Za-z0-9]+" title="Va rog doar caractere alfa-numerice" name="telefon"></p>
        <input type="submit" id="sterge" name="sterge" value="Sterge din stoc">
    </form>';
        }
    ?>
</div>

</div>
</body>
</html>	