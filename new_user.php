
<?php
if(isset($_POST['register'])) {
    $db = "proiect";

    $con = mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username = $_POST['nname'];
    $password = $_POST['npassword'];
    $email = $_POST['email'];
    $prenume = $_POST['prenume'];
    $nume = $_POST['nume'];
    $result = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) { //check if there is already an entry for that username
        echo 'Username deja existent';
    } else {
        echo '<meta http-equiv="refresh" content="2;url=index.php" />';
        echo 'Felicitari! Ati creat contul cu success';
        mysqli_query($con, "INSERT INTO users (username, password, email, prenume, nume) VALUES ('$username', '$password', '$email', '$prenume', '$nume')");
    }
}
if(isset($_POST['modifica'])){
    header('Location: modify.php');
}
if(isset($_POST['modifica2'])){
    session_start();
    $user=$_SESSION['utilizator'];
    $db = "proiect";
    $con = mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $npass = $_POST['nnpassword'];
    $email = $_POST['nemail'];
    $prenume = $_POST['nprenume'];
    $nume = $_POST['nnume'];
    $_SESSION['loggedin'] = false;
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$user'");
    $row = mysqli_fetch_array($result);
    if($npass != null) {
//        echo $npass.' ';
//        echo $user.' ';
//        echo $row[0].' ';
        echo '<meta http-equiv="refresh" content="3;url=index.php" />';
        mysqli_query($con,"UPDATE users SET `password` = '$npass' WHERE ID = '$row[0]'") or die(mysqli_error($con));
    }
    if($email != null) {
//        echo $email.' ';
//        echo $user.' ';
//        echo $row[0].' ';
        echo '<meta http-equiv="refresh" content="3;url=index.php" />';
        mysqli_query($con,"UPDATE users SET `email` = '$email' WHERE ID = '$row[0]'") or die(mysqli_error($con));
    }
    if($prenume != null) {
//        echo $prenume.' ';
//        echo $user.' ';
//        echo $row[0].' ';
        echo '<meta http-equiv="refresh" content="3;url=index.php" />';
        mysqli_query($con,"UPDATE users SET `prenume` = '$prenume' WHERE ID = '$row[0]'") or die(mysqli_error($con));
    }
    if($nume != null) {
//        echo $nume.' ';
//        echo $user.' ';
//        echo $row[0].' ';
        echo '<meta http-equiv="refresh" content="3;url=index.php" />';
        mysqli_query($con,"UPDATE users SET `nume` = '$nume' WHERE ID = '$row[0]'") or die(mysqli_error($con));
    }
    if($npass!=null){
        echo "Ati schimbat parola in: <strong>".$npass."</strong><br>";
    }
    if($email!=null){
        echo "Ati schimbat email-ul in: <strong>".$email."</strong><br>";
    } if($nume!=null){
        echo "Ati schimbat numele in: <strong>".$nume."</strong><br>";
    } if($prenume!=null){
        echo "Ati schimbat prenumele in: <strong>".$prenume."</strong><br>";
    }
    echo 'Ati schimbat datele cu success. Veti fi directionat sa va relogati in 3 secunde....';
}
?>