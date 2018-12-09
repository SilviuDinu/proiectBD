<html>
<?php
$db="id8182920_proiect";
$con=mysqli_connect("localhost", "id8182920_root", "parola123", "id8182920_proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['logout'])) {
    echo 'V-ati delogat cu success';
}
session_start();
$nume =  $_SESSION['utilizator'];

if (isset($_POST['delete'])){
    $result = mysqli_query($con, "DELETE FROM users WHERE username='$nume'");
    echo "Contul cu username-ul ". $nume." a fost sters din baza de date";
}

?>
<head>
    <p style="font-size: 20px;">Apasati <a href="index.php">aici</a> pentru a va intoarce la pagina principala</p>
</head>
</html>
