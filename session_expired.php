<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/my.js"></script>
</head>
<style>
    h1, h2 {
        text-align: center;
    }
    h1{

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
<h1>
    <?php
    echo 'Sesiunea a expirat, va rog sa va relogati din motive de securitate. ';
    $_SESSION['loggedin'] = false;
    ?>
</h1>
<h2><a href="index.php">Acasa</a></h2>
</div>
</body>
</html>