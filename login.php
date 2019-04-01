<?php
$db="epiz_23148243_proiect";
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
if (isset($_POST['login'])) {
    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username=$_POST['name'];
    session_start();
    $_SESSION['loggedin'] = false;
    $_SESSION['utilizator'] = $_POST['name'];
    $password=$_POST['password'];
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$password'");
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0 ) { //check if there is already an entry for that username
        $_SESSION['loggedin'] = true;
        mysqli_query($con, "INSERT INTO loggedin (ID, username) VALUES ('$row[0]', '$username')");
        header('Location: welcome.php');
    }
    else {
        echo "Parola sau Username gresit. Daca nu aveti cont, mergeti inapoi si apasati pe Register sau Am uitat parola";
        echo '<body>
      <form action="forgot1.php" method="post" style="margin-top: 30px;">
      <input type="email" required id="email" pattern="[A-Za-z0-9_.@]+" placeholder="Introduceti email" name="email"><br>
      <input type="submit" name="forgot" style="margin-top:18px;" value="Am uitat parola">
         </form>
         </body>';
    }
} else if (isset($_POST['register'])){
    header('Location: register.php');
}
else {
    echo '<h1>Tzeapa</h1>';
}
?>	