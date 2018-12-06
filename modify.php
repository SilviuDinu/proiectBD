<<<<<<< HEAD
<html>
<?php
session_start();
$user=$_SESSION['username'];
?>



=======

<html>
>>>>>>> bfabf8ddfd56413fcd80b54166f98b9e90c734f1
<style>
    input {
        width: 12%;
        padding: 12px 20px;
<<<<<<< HEAD
        margin: 5;
=======
        margin: 5px;
>>>>>>> bfabf8ddfd56413fcd80b54166f98b9e90c734f1
        border-radius: 30px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        margin-left: 65px;
    }
<<<<<<< HEAD
    input#nume{
        margin-left: 30px;
    }
    input#email{
        margin-left: 28px;
    }
    input#prenume{
=======
    input#nnume{
        margin-left: 30px;
    }
    input#nemail{
        margin-left: 28px;
    }
    input#nprenume{
>>>>>>> bfabf8ddfd56413fcd80b54166f98b9e90c734f1
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
<<<<<<< HEAD
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
=======
<script>
    function myFunction(){
        alert("Doar campurile completate vor fi luate in considerare");
    }
</script>
<body background="sea.jpg">
<h1 style="text-align: center; font-style: italic; font-weight: bold; font-size: 50px; padding: 15px 0px 0px 10px;">Introduceti datele pe care vreti sa le schimbati</h1>
<div style="text-align:center; vertical-align:middle">
    <form action="new_user.php" method="post">
        <label for="nnpassword">Password</label>
        <input type="password" id="nnpassword" name="nnpassword">
        <br><label for="nnname">Nume</label>
        <input type="text" id="nnume" name="nnume">
        <br><label for="nnname">Prenume</label>
        <input type="text" id="nprenume" name="nprenume">
        <br> <label for="nnname">Email</label>
        <input type="text" id="nemail" name="nemail"><br>
        <input type="submit" onclick="myFunction()" name="modifica2" value="Modifica">
>>>>>>> bfabf8ddfd56413fcd80b54166f98b9e90c734f1
    </form>
</div>

</body>
</html>
