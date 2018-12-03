<html>


<style>
    .holder{

        margin: 0 auto;
    }
    .holder h1{
        text-align: center;
    }
    input[type=number]:focus {
        background-color: lightskyblue;
        outline: none;
    }

    input[type=submit] {
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #ccc;
        height: 50px;
        width: 150px;
    }
    input[type=number]{
        transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in;
        text-align: center;
        border-radius: 30px;
        box-sizing: border-box;
        border: 5px solid #ccc;
        height: 50px;
    }
    form{
        position:absolute;
        top:10%;
        right:0;
        left:0;
        width: 50%;
        margin: 0 auto;
        text-align: center;
    }
    body{
        background-size: cover;
    }
    h1{
        text-align: center;
    }
    .iphone, .samsung, .oneplus{
        width: 26%;
        height: auto;
        margin: 0 auto;
        display: block;
        overflow: hidden;
        margin-top: 20vw;
        /*transition: width 2s;*/
        /*-webkit-transition: width 2s; !* Safari 3.1 to 6.0 *!*/
        -webkit-transition: -webkit-transform 1s ease-in-out;
        transition:         transform 1s ease-in-out;
    }


    .iphone:hover, .samsung:hover, .oneplus:hover{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    .pic{
        margin: 0 auto;
        width: 90%
    }

</style>
<body background="sea.jpg">


<div class="holder"><h1>Telefonul <?php echo $model.' '.$telefon.' de la brand-ul '.$brand;?> exista in stoc</h1>

    <form action="products1.php" method="post" id="sum" onsubmit="myFunction()">
        <label for="suma"><strong><h2>Introduceti suma pe care doriti sa o licitati, sau apasati <a href="index.php">aici</a> pentru a va deloga. Atentie, suma este in EURO</h2></strong></label><br><br>
        <input type="number" placeholder="Introduceti Suma" id="suma" name="suma"><br><br>
        <input type="submit"  id="insert" name="insert" value="Liciteaza">
</div>
<div class="pic"><?php
    $src=null;
    if($model=='Oneplus' || $model=='oneplus'){
        $src='oneplus.png';
        echo '<img class="oneplus" src="' . $src . '">';
    }
    if($model=='Galaxy' || $model=='galaxy'){
        $src='samsung.png';
        echo '<img class="samsung" src="' . $src . '">';
    }
    if($model=='Iphone' || $model=='iphone'){
        $src='iphone.png';
        echo '<img class="iphone" src="' . $src . '">';
    }
    if($src==null)
    {
        include 'session_expired.php';
    }

    ?></div>

<!--<script>-->
<!--    function createDoll(userChoice) {-->
<!--        var output = document.getElementById("display_here");-->
<!--        output.innerHTML = "";-->
<!---->
<!--        var links = [-->
<!--            "http://www.dreamomania.info/dreamdictionary/wp-content/uploads/2013/02/V.jpg",-->
<!--            "http://i452.photobucket.com/albums/qq248/lostvegasvip/Burning-letter-P-psd26647.png",-->
<!--            "http://www.arro-signs.co.uk/red-letter-s.jpg",-->
<!--            "http://colleenmorrow.com/wp-content/uploads/2011/09/the-letter-m.png"-->
<!--        ];-->
<!---->
<!--        var choices = ["Vintage", "Plaid", "Skater", "Maxi"];-->
<!--        var sentence = "<p>You picked a " + choices[userChoice] + " doll.</p>"-->
<!--        var img = '<img src="' + links[userChoice] + '">';-->
<!---->
<!--        output.innerHTML = sentence + img;-->
<!--    }-->
<!--</script>-->
<!---->
<!---->
<!--<select name="choice" id="choice" size="3" onchange="createDoll(this.value)">-->
<!--    <option value="0">Vintage</option>-->
<!--    <option value="1">Plaid</option>-->
<!--    <option value="2">Skater</option>-->
<!--    <option value="3">Maxi</option>-->
<!--</select>-->
<div id="display_here"></div>


</body>

</html>