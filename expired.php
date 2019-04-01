<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    exit('<h2>Hopa! Se pare ca te-ai pierdut. te rog fugi repejor</h2> <a href="index.php">ACASA</a>');
}
$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$omul=$_SESSION['utilizator'];
$r1=mysqli_query($con, "SELECT * FROM loggedin WHERE username='$omul'");
mysqli_fetch_array($r1);
if(!(mysqli_num_rows($r1)>0))
{
    exit('<h2>Hopa! Se pare ca te-ai pierdut. te rog fugi </h2> <a href="index.php">ACASA</a>');
}
?>

<html>
<head>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/my.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">

    </head>
</head>
<style>
    h1, h2, p {
        text-align: center;
        font-size: 25px;
    }
    .checkmark{
        width: 10%;
        height: auto;
        position: absolute;
        top: 4vw;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    .container{
        width: 75%;
        position: relative;
        margin: 0 auto;
        /*margin-top: 10vw !important;*/
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        top: 30%;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height: auto;
        font-size: 18px;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
    }
    div#particles-js {
        background-color: #546398;
    }
</style>
<body background="tech.png">
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
    <img class="checkmark" src="exclamation.png">'
<div class="container">
    <p>
        <?php
        $tel=$_SESSION['telefon'];
        $sum=$_SESSION['suma'];
        $om=$_SESSION['utilizator'];
        session_abort();
        //Send the email
        $db="epiz_23148243_proiect";
        $con=mysqli_connect("localhost", "root", "", "proiect");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result15 = mysqli_query($con, "SELECT * FROM licitatii WHERE suma = (SELECT MAX(suma) FROM licitatii WHERE telefon='$tel')");
        $row15=mysqli_fetch_array($result15);
        $result12 = mysqli_query($con, "SELECT email FROM users WHERE username = '$row15[0]'");
        $row12 = mysqli_fetch_array($result12);
        $result1 = mysqli_query($con, "SELECT * FROM telefoane WHERE telefon = '$tel'");
        $result11= mysqli_query($con, "SELECT * FROM model WHERE model_ID = (SELECT model_ID FROM telefoane where telefon='$tel')");
        $row1 = mysqli_fetch_array($result1);
        $row11 = mysqli_fetch_array($result11);
        mysqli_query($con, "DELETE FROM loggedin WHERE username='$om'");
        $_SESSION['loggedin'] = false;

        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
        require 'vendor/autoload.php';

        /* Exception class. */
        require 'src/Exception.php';
        //
        /* The main PHPMailer class. */
        require 'src/PHPMailer.php';

        /* SMTP class, needed if you want to use SMTP. */
        require 'src/SMTP.php';


        echo 'Licitatia pe care o urmareati a expirat, va rog sa va relogati pentru a participa la altele.';

        if ($sum > $row1[2] && $sum == $row1[3]){


            $mail = new PHPMailer\PHPMailer\PHPMailer(true);


            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'silviualex626@gmail.com';                 // SMTP username
            $mail->Password = '162534Naruto12.';                           // SMTP password
            $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->From = "silviualex626@gmail.com";
            $mail->FromName = "Silviu_Licitatii";
            $mail->addAddress("$row12[0]", "$om");     // Add a recipient
            $mail->addAddress("silviualex626@gmail.com", "Silviu");     // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Ati castigat licitatia!';
            $mail->addEmbeddedImage('tibi.jpg','logoimg', 'tibi.jpg');
            $mail->Body    = 'Salut, '.$om.'<br><br>Se pare ca ati castigat licitatia. Ati licitat:'.$row1[3].' EURO pentru '.$row11[1].' '.$tel.'. Felicitari! <br><br> Evident nu trebuie sa platiti nimic pentru ca asta e doar o tema.<br>Mai jos aveti factura. <img src=\"cid:logoimg\" />';
//    $mail->AltBody = 'Anything you\'d like the mail body to have in it.';
            if(!$mail->send()) {
                echo 'There was an error sending the contact form email. <br>';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
//            $src='exclamation.png';
//            echo '<img class="checkmark" src="' . $src . '">';
            echo '<p>Se pare ca cea mai mare suma este: <strong>'.$row1[3].'</strong> EURO pentru <strong>'.$row11[1].' '.$tel.'</strong>. Castigatorul este <strong>'.$row15[0].'</strong> si va fi contactat pe email</p>';
            mysqli_query($con, "DELETE FROM licitatii WHERE telefon='$tel'");
            mysqli_query($con, "UPDATE telefoane SET `last_bid` = '0' WHERE telefon='$tel'");
        }
        ?>
    </p>
    <h2><a href="index.php">Acasa</a></h2>
</div>
</div>
</body>
</html>