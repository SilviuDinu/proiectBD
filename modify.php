<html>
<?php
session_start();
$user=$_SESSION['username'];
?>



<style>
    input {
        width: 12%;
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
<!--<script>-->
<!--    function myFunction() {-->
<!--        alert("Doar campurile completate vor fi luate in considerare\n");-->
<!--    }-->
<!--</script>-->
<body background="sea.jpg">
<h1 style="text-align: center; font-style: italic; font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px;">Introduceti noile date in campul corespunzator</h1>
<div style="text-align:center; vertical-align:middle">
    <form action="new_user1.php" method="post">
        <label for="password">Password</label>
        <input type="password" id="passwordd" name="passwordd"><br>
        <label for="name">Nume</label>
        <input type="text" id="nume" name="nume"><br>
        <label>Prenume</label>
        <input type="text" id="prenume" name="prenume"><br>
        <label>Email</label>
        <input type="text" id="email" name="email"><br>
        <input type="submit" name="modifica" value="Modifica">
    </form>
</div>

</body>
</html>
