<html>
<style>
    body {
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: 50;
    }
</style>
<body>
<?php
if ($_POST["name"]=='Silviu') {
    echo 'Salut, '.$_POST["name"].', autorul acestui proiect';
}
?>

<form action="logout.php" method="post">
    <p id="log">Doriti sa va delogati? Apasati butonul de mai jos:</p>
    <input type="submit" name="logout" value="Logout">
</form>
<?php
if ($_POST["name"]=='Silviu') {
    include 'document.php';
}
else{
    echo 'Welcome '.$_POST["name"];
}
?>
</body>
</html>