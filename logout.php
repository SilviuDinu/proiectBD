<html>
<?php
$db="epiz_23148243_proiect";
$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['logout'])) {
    echo '<h2>V-ati delogat cu success</h2>';
}
session_start();
$nume = $_SESSION['utilizator'];
if (isset($_POST['delete'])){
    $result = mysqli_query($con, "DELETE FROM users WHERE username='$nume'");
    echo "Contul cu username-ul ". $nume." a fost sters din baza de date";
    mysqli_query($con, "DELETE FROM loggedin WHERE username='$nume'");
}
$_SESSION['loggedin'] = false;

?>
<head>
    <p style="font-size: 20px;">Apasati <a href="index.php">aici</a> pentru a va intoarce la pagina principala</p>
</head>

</html>
