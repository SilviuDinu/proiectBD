<html>

<?php
if (isset($_POST['login'])) {
    echo 'Welcome '.$_POST["name"];
} elseif (isset ($_POST['register'])) {
    include 'register.php';
}
?>
</html>