<html>
<style>
    body {
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: 50;
    }
</style>
<body>



<form action="logout.php" method="post">
    <p id="log"><?php echo 'Sunteti logat cu username-ul ';?><strong style="font-size: 18px; font-style: italic;"><?php echo $_POST["name"];?></strong><?php echo ', bine ai venit!';?><br><br>Doriti sa va delogati? Apasati butonul de mai jos:</p>
    <input type="submit" name="logout" value="Logout">
</form>
<?php
//echo 'Salut, '.$_POST["name"].', bine ai venit!';
include 'document.php';

?>
</body>
</html>