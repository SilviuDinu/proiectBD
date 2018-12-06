<?php
if(isset($_POST['modifica'])) {
    $pass = $_POST['passwordd'];
    $email = $_POST['email'];
    $prenume = $_POST['prenume'];
    $nume = $_POST['nume'];
    $db = "proiect";

    $con = mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    session_start();
    $utilizator = $_SESSION['username'];


    //echo '<meta http-equiv="refresh" content="5;url=index.php" />';
    echo 'Felicitari! Ati modificat cu succes. Asteptati.....';
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$utilizator'");
    $row = mysqli_fetch_array($result);



    if ($pass != null) {
        echo $pass.'  '.$row[0].' ';
//        echo $utilizator;
    mysqli_query($con, "UPDATE users SET password = $pass WHERE ID=$row[0]") or die(mysqli_error($con));
}
    if ($nume != null) {
        echo $nume;
        mysqli_query($con, "UPDATE users SET nume = $nume WHERE ID=$row[0]") or die(mysqli_error($con));
    }
    if ($prenume != null) {
        echo $prenume;
        mysqli_query($con, "UPDATE users SET prenume = $prenume WHERE ID=$row[0]");
    }
    if ($email != null) {
        echo $email;
        mysqli_query($con, "UPDATE users SET email = $email WHERE username = $utilizator");
    }
}
?>
