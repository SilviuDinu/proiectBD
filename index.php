<?php
//$con=mysqli_connect("sql306.epizy.com", "MLtrtOZI4XW5"epiz_23148243"MLtrtOZI4XW5", "MLtrtOZI4XW5", "epiz_23148243_proiect");
//if (mysqli_connect_errno())
//{
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//session_start();
//$omul=$_SESSION['utilizator'];
////$_SESSION['loggedin'] = false;
//mysqli_query($con, "DELETE FROM loggedin WHERE username='$omul'");
//?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/my.js"></script>
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<style>
    input {
        width: 25%;
        padding: 12px 20px;
        margin: 5px;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
    }
    input[type=text],input[type=password]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
    }
   label {
    color: white;
}
   img {
       width: 20%;
        transition: width 2s;
        -webkit-transition: width 2s; /* Safari 3.1 to 6.0 */
       overflow: hidden;
       max-width: 100%;
       height: auto;
       box-sizing: border-box;
    }
    div#particles-js {
        background-color: #546398;
    }
    img:hover{
        width: 30% !important;
        height: auto;
        overflow: hidden;
        max-width: 100%;
        box-sizing: border-box;
    }
     input[type=text]:focus {
        background-color: lightskyblue;
        width: 25%;
         outline: none;
    }
    input[type=password]:focus {
        background-color: lightskyblue;
        width: 25%;
        outline: none;
    }
    input[type="submit"]:hover {
        background-color: yellow;
    }
    input[type="submit"]:focus{
        outline: none;
    }
    form {
        position:absolute;
        top:35%;
        right:0;
        left:0;
        width: 50%;
        margin: 0 auto;
    }
    body, h1 {
        font-family: "Libre Baskerville", Sans-serif;
    }
    img#iphone {
        float: left;
        width: 25%;
        margin-top: 90px;
        z-index: 1;
        position: relative;
    }
   img#oneplus {
        float: right;
        width: 25%;
       margin-top: 90px;
        right: 0;
       z-index: 1;
       position: relative;
    }
   h1{
       position: absolute;
       top: 10%;
       right: 0;
       left: 0;
       width: 45%;
       margin: 0 auto;
       text-align: center;
   }
    canvas.particles-js-canvas-el{
        position: absolute;
    }
    .container{
        width: 50%;
        margin: 0 auto;
       /*background-color: black;*/
        /*z-index: 0;*/
        /*background-color: rgba(255,255,255,0.6);*/
    }
    /*#video {*/
       /*position: fixed;*/
        /*right: 0;*/
        /*bottom: 0;*/
        /*min-width: 100%;*/
        /*min-height: 100%;*/
        /*z-index: -4;*/
    /*}*/
    p{
        text-align: center;
        vertical-align: center;
        bottom: 0;
        margin-left: auto;
        margin-right: auto;
        font-size: 20px;
    }
    .footer{
        width: 100%;
        height: 50px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        color: #ffffff;
        position: fixed;
        margin: 0 auto;
        bottom: 20%;
        text-align: center;
    }
    label{
        font-size: 15px;
    }
    input#details{
        position: relative;
        /*top: 35%;*/
        /*bottom: 0;*/
        /*right: 0;*/
        /*left: 0;*/
        /*display: block;*/
    }

</style>
<body>
<!--<video autoplay muted loop id="video">-->
<!--    <source src="tech.mp4" type="video/mp4">-->
<!--    Your browser does not support HTML5 video.-->
<!--</video>-->
<div id="particles-js">
        <img src="iphone.png" id="iphone">


        <img src="oneplus.png" id="oneplus">
    </div>
<script src="particles.js/particles.js"></script>
<script src="particles.js/demo/js/app.js"></script>

<!-- stats.js -->
<script src="particles.js/demo/js/lib/stats.js"></script>
<h1 style="background-color: rgba(255,255,255,0.5); font-weight: bold; font-size: 50px;">Sistem de licitații online<br> pentru telefoane mobile</h1>
<div class="container" style="text-align:center; vertical-align:middle">
    <form action="login.php" method="post">
        <label for="name">Username</label>
        <input type="text" placeholder="Enter Username" id="name" pattern="[A-Za-z0-9]+" name="name"><br>
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" id="password" pattern="[A-Za-z0-9]+" name="password"><br>
        <input type="submit" name="login" value="Login">
        <input type="submit" name="register" id="register" value="Register">
    </form>
</div>

<div class="row">

</div>
<div class="footer"><p>Acest website respecta in totalitate reglementarile GDPR, intrucat nicio data personala nu este transmisa unei entitati third-party</p>
</div>
</body>
</html>	