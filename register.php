
<html>
<style>
    input {
<<<<<<< HEAD
        width: 12%;
=======
        width: 10%;
>>>>>>> 59adb542767ff4acb320e1c22d8766e58bf9baf5
        padding: 12px 20px;
        margin: 5;
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
        border: 5px solid #ccc;
        outline: none;
    }
    input[type=text]:focus {
        background-color: lightskyblue;
<<<<<<< HEAD
        width: 15%;
=======
        width: 12%;
>>>>>>> 59adb542767ff4acb320e1c22d8766e58bf9baf5
        outline: none;
    }
    input[type=password]:focus {
        background-color: lightskyblue;
<<<<<<< HEAD
        width: 15%;
=======
        width: 12%;
>>>>>>> 59adb542767ff4acb320e1c22d8766e58bf9baf5
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
<body background="sea.jpg">
<h1 style="text-align: center; font-style: italic; font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px;">Creati un nou cont de utilizator</h1>
<div style="text-align:center; vertical-align:middle">
    <form action="new_user.php" method="post">
        <label for="nname">Username</label>
<<<<<<< HEAD
        <input type="text" id="nname" name="nname"><br>
        <label for="npassword">Password</label>
        <input type="password" id="npassword" name="npassword"><br>
=======
        <input type="text" id="nname"  placeholder="Enter Username" name="nname"><br>
        <label for="npassword">Password</label>
        <input type="password" id="npassword" placeholder="Enter Password" name="npassword"><br>
>>>>>>> 59adb542767ff4acb320e1c22d8766e58bf9baf5
        <label for="nname">Nume</label>
        <input type="text" id="nume" name="nume"><br>
        <label for="nname">Prenume</label>
        <input type="text" id="prenume" name="prenume"><br>
        <label for="nname">Email</label>
        <input type="text" id="email" name="email"><br>
        <input type="submit" name="register" value="Register">
    </form>
</div>

</body>
</html>
