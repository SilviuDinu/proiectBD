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
        border: 5px solid #50afc3;
        height: auto;
    }
    input[type=submit]{
        width: auto;
        margin-left: 10%;
    }
    p{
        margin-left: 10%;
    }
    input {
        padding: 12px 20px;
        border-radius: 30px;
        box-sizing: border-box;
        outline: none;
    }
    .container{
        width: 75%;
        margin: 0 0 0 auto;
        float:right;
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        z-index: -1;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height: auto;
    }
    .description, ul, li, p:not(#log){
        width: 33.33%;
        margin: 0 auto;
        float: left;
        text-align: center;
    }
    p#description2{
        width: 33.33%;
        margin: 0 auto;

        text-align: center;
    }
    p#description3{
        width: 33.33%;
        text-align: center;
        margin: 0 auto;
    }
    #model{
        width: 50%;
    }
    #telefon{
        width: 50%;
    }
    body, p {
        font-family: "Libre Baskerville", Sans-serif;
    }
    h2, h1{
        text-align: center;  font-style: italic; font-weight: normal;
        font-size: 25px;
    }
    #video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -6;
    }
    #doc{
        width: 100%;
        margin: 0 auto;
    }
    select{
        /*margin-left: 5%;*/
        /*margin-right: 90%;*/
        height: 40px !important;

        text-align: center;
        font: inherit !important;
    }
    input#search{
        width: 15%;
        display: block;
        margin: 10px auto;
    }
    input[type=text]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input[type=password]:focus {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
    }
    input {
        width: 12%;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
    }
    input[type=text],input[type=password]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
    }
    button {
        background-color: lightskyblue;
        width: 15%;
        outline: none;
        margin: 5px;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #50afc3;
    }
</style>
<body>
<video autoplay muted loop id="video">
    <source src="tech.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div class="is-right">
<form action="logout.php" method="post">
    <p id="log"><?php echo 'Sunteti logat cu username-ul ';?><strong style="font-size: 18px; font-style: italic;"><?php echo $_SESSION["utilizator"];?></strong><?php echo ', bine ai venit!';?><br><br>Doriti sa va delogati? Apasati butonul de mai jos:</p>
    <input type="submit" name="logout" value="Logout">
    <p id="log">Doriti sa va stergeti contul?</p>
    <input type="submit" name="delete" value="Delete">
    <p id="log">
        <?php
        $username=$_SESSION["utilizator"];
        $db="id8182920_proiect";
        $con=mysqli_connect("localhost", "id8182920_root", "parola123", "id8182920_proiect");
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
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "2":
                                echo "<br>Password: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "3":
                                echo "<br>Nume: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "4":
                                echo "<br>Prenume: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                            case "5":
                                echo "<br>Email: ";
                                echo '<strong>'.$row[$i].'</strong>';
                                $i++;
                        }
                }
        ?>
    </p>
</form>
<form action="new_user.php" method="post">
    <input type="submit" name="modifica" id="modifica" value="Modifica">
</form>
    <p id="log">Detalii despre site-ul nostru</p>
    <form action="details.php" method="get">
        <input type="submit" name="details"  id="details"  value="Detalii">
    </form>
</div>
<div class="container">
    <h1><?php
        $db="id8182920_proiect";
        $username=$_SESSION["utilizator"];
        $con=mysqli_connect("localhost", "id8182920_root", "parola123", "id8182920_proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        echo 'Salut, '.$_SESSION["utilizator"].', bine ai venit!';
        ?></h1>
    <h2>Alegeti produsul la care doriti sa licitati</h2>
    <form action="products.php" method="get" id="doc"><p class="description">Selectati brand-ul dorit: <br><br><select name="telefoane" style="height: 20px;">
                <option value="apple">Apple</option>d
                <option value="samsung">Samsung</option>
                <option value="oneplus">Oneplus</option>
            </select></p>
        <p id="description2">Selectati modelul dorit:
            <br><br>
            <input type="text" placeholder="Model telefon" id="model" name="model"></p>
        <p id="description3">Selectati telefonul dorit:
            <br><br>
            <input type="text" placeholder="Nume Telefon" id="telefon" name="telefon"><br><br><br></p><br><br><br>
        <br><br><br>
        <input type="submit"  id="search" name="search" value="Cauta">
    </form>
</div>
</body>
</html>