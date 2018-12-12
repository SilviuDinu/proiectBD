<html>
<body background="tech.png">
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
    input[type=text],input[type=password]{
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
    input[type="submit"]:hover {
        background-color: yellow;
    }
    input[type="submit"]:focus{
        outline: none;
    }
    body {
        font-family: Calibri;
        background-size: cover;
    }
</style>

<h1 style="text-align: center; font-style: italic; font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px;">Creati un nou cont de utilizator</h1>
<div style="text-align:center; vertical-align:middle">
    <form action="new_user.php" method="post">
        <label for="nname">Username</label>
        <input type="text" required id="nname" pattern="[A-Za-z0-9]{2,}" name="nname"><br>
        <label for="npassword">Password</label>
        <input type="password" required id="npassword" pattern="[A-Za-z0-9]{2,}" name="npassword"><br>
        <label for="nname">Nume</label>
        <input type="text" required id="nume" pattern="[A-Za-z0-9]{2,}" name="nume"><br>
        <label for="nname">Prenume</label>
        <input type="text" required id="prenume" pattern="[A-Za-z0-9]{2,}" name="prenume"><br>
        <label for="nname">Email</label>
        <input type="text" required id="email" pattern="[A-Za-z0-9]{2,}" name="email"><br>
        <input type="submit" name="register"  value="Register">
    </form>
</div>
</body>
</html>
