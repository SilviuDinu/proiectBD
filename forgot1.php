<html>
<head>
    <meta http-equiv="refresh" content="3;URL='index.php'" />
    <link rel="stylesheet" media="screen" href="particles.js/demo/css/style.css">
</head>
<style>
    p {
        text-align: center;
        font-size: 24px;
        margin: 0 auto;
        margin-top: 3% !important;
    }
    canvas.particles-js-canvas-el{
        position: absolute;
    }
    div#particles-js {
        background-color: #546398;
    }
    .container{
        width: 37%;
        position: relative;
        margin: 0 auto;
        /* margin-top: 10vw !important; */
        /* background-image: linear-gradient(lightskyblue , whitesmoke); */
        background-color: rgba(255,255,255,0.75);
        top: 15vw;
        border-radius: 25px;
        border: 5px solid #50afc3;
        height:15%;
        font-size: 18px;
    }
</style>
<div id="particles-js">
    <script src="particles.js/particles.js"></script>
    <script src="particles.js/demo/js/app.js"></script>

    <!-- stats.js -->
    <script src="particles.js/demo/js/lib/stats.js"></script>
    <div class="container">
        <?php
$con=mysqli_connect("localhost", "root", "", "proiect");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email=$_POST['email'];

$r01=mysqli_query($con, "SELECT username FROM users WHERE email='$email'");
$row01=mysqli_fetch_array($r01);
$r011=mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
$row011=mysqli_fetch_array($r011);
$user=$row01[0];

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


$_SESSION['loggedin'] = false;


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
$mail->addAddress("$email", "$user");     // Add a recipient
$mail->addAddress("silviualex626@gmail.com", "Silviu");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Parola uitata';
//$mail->addEmbeddedImage('tibi.jpg','logoimg', 'tibi.jpg');
$mail->Body    = 'Salut, '.$user.'<br><br>Parola ta este: '.$row011[0];
//    $mail->AltBody = 'Anything you\'d like the mail body to have in it.';
if(!$mail->send()) {
    echo 'There was an error sending the contact form email. <br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

echo '<p>Un email a fost trimis catre '.$email.'</p>';
?>

    </div>
</div>
</html>
	