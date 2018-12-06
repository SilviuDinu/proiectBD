<html>
<style>
    body {
        font-family: "Libre Baskerville", Sans-serif;
        font-weight: 50;
    }
    .is-right{
        width: 22.5%;
        float: left;
        background-color: rgba(255,255,255,0.88);
        z-index: -1;
        border-radius: 25px;
        border: 5px solid #ccc;
        height: auto;
        text-align: center;
    }
    input[type=submit]{
        width: auto;
    }

</style>
<body>
<div class="is-right">
<form action="logout.php" method="post">
    <p id="log"><?php echo 'Sunteti logat cu username-ul ';?><strong style="font-size: 18px; font-style: italic;"><?php echo $_POST["name"];?></strong><?php echo ', bine ai venit!';?><br><br>Doriti sa va delogati? Apasati butonul de mai jos:</p>
    <input type="submit" name="logout" value="Logout">
    <p id="log">Doriti sa va stergeti contul?</p>
    <input type="submit" id="delete" name="delete" value="Delete">
    <p id="log">Datele contului sunt:<br>
        <?php
        $db="proiect";
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $i=0;
        $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
                while($row = mysqli_fetch_array($result)) {
                    $i++;
                        switch ($i) {
                            case "1":
                                echo "<br>Username: ";
                                echo $row[$i];
                                $i++;
                            case "2":
                                echo "<br>Password:  ";
                                echo $row[$i];
                                $i++;
                            case "3":
                                echo "<br>Nume:  ".' ';
                                echo $row[$i];
                                $i++;
                            case "4":
                                echo "<br>Prenume: ";
                                echo $row[$i];
                                $i++;
                            case "5":
                                echo "<br>Email: ";
                                echo $row[$i];
                                $i++;
                        }
                }

        ?>
    </p>
</form>
    <form action="modify.php" method="post">
       <input type="submit" name="modifica" value="Modifica">
    </form>
</div>
<?php
//echo 'Salut, '.$_POST["name"].', bine ai venit!';
include 'document.php';

?>
</body>
</html>