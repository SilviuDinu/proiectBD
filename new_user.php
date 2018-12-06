<?php
$db="proiect";

$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username=$_POST['nname'];
$password=$_POST['npassword'];
$email=$_POST['email'];
$prenume=$_POST['prenume'];
$nume=$_POST['nume'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0 ) { //check if there is already an entry for that username
    echo 'Username deja existent';
}
else {
    echo 'Felicitari! Ati creat contul cu success';
    mysqli_query($con,"INSERT INTO users (username, password, email, prenume, nume) VALUES ('$username', '$password', '$email', '$prenume', '$nume')");
}

?>