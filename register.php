<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<body>
<style>
    input {
        width: 12%;
        padding: 12px 20px;
        margin: 5px;
        border-radius: 30px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        margin-left: 65px;
    }
    input#nume{
        margin-left: 30px;
    }
    input#email{
        margin-left: 28px;
    }
    input#prenume{
        margin-left: 8px;
    }
    input[type=text],input[type=password],input[type=email]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
        border: 5px solid #50afc3;
        outline: none;
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
    input[type=email]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input[type="submit"]:hover {
        background-color: yellow;
    }
    input[type="submit"]:focus{
        outline: none;
    }
    body {
        font-family: Calibri;
        background-size: cover;
        font-size: 16px;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
        z-index=-1000;
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
<h1 style="text-align: center; font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px;">Creati un nou cont de utilizator</h1>
<div style="text-align:center; vertical-align:middle; position: relative; margin-top: 25px">
    <form action="new_user.php" method="post">
        <label for="nname">Username</label>
        <input type="text" required id="nname" pattern="[A-Za-z0-9]+" name="nname"><br>
        <label for="npassword">Password</label>
        <input type="password" required id="npassword" pattern="[A-Za-z0-9]+" name="npassword"><br>
        <label for="nname">Nume</label>
        <input type="text" required id="nume" pattern="[A-Za-z0-9]+" name="nume"><br>
        <label for="nname">Prenume</label>
        <input type="text" required id="prenume" pattern="[A-Za-z0-9]+" name="prenume"><br>
        <label for="nname">Email</label>
        <input type="email" required id="email" pattern="[A-Za-z0-9-_@.]+" name="email"><br>
        <input type="submit" name="register"  value="Register">
    </form>
</div>
</div>
</body>
</html>
