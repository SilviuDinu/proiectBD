<html>
<style>
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
        margin-top: 2vw !important;
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        z-index: -1;
        border-radius: 25px;
        border: 5px solid #ccc;
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
        text-align: center;  font-style: italic; font-weight: normal; font-size: 30px
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
    input#auction{
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
            border: 5px solid #ccc;
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
        border: 5px solid #ccc;
    }
</style>
<script>
    function myFunction() {
        var person = prompt("Please enter your name", "Harry Potter");
        if (person != null) {
            <!--            --><?php //echo "Salut ";?>
            document.getElementById("demo").innerHTML =
                "Hello " + person + "! How are you today?";
        }
    }
</script>
<body>
<div class="container">
    <h1><?php
        echo 'Salut, '.$_POST["name"].', bine ai venit!';
        ?></h1>
    <h2>Alegeti produsul la care doriti sa licitati</h2>
    <form action="products.php" method="get" id="doc"><p class="description">Selectati brand-ul dorit: <br><br><select name="telefoane" style="height: 20px;">
                <option value="apple">Apple</option>d
                <option value="samsung">Samsung</option>
                <option value="oneplus">Oneplus</option>
            </select></p>
        <p id="description2">Selectati modelul-ul dorit:
            <br><br>
            <input type="text" placeholder="Model telefon" id="model" name="model"></p>
        <p id="description3">Selectati telefonul dorit:
            <br><br>
            <input type="text" placeholder="Nume Telefon" id="telefon" name="telefon"><br><br><br></p><br><br><br>

<!--        <div id="container2">-->
<!--            <p id="description2">Selectati modelul-ul dorit:-->
<!--                <br><br>-->
<!--                <input type="text" placeholder="Model telefon" id="model" name="model"></p>-->
<!--            <p id="description3">Selectati telefonul dorit:-->
<!--                <br><br>-->
<!--                <input type="text" placeholder="Nume Telefon" id="telefon" name="telefon"></p>-->
<!--        </div>-->
<!--        <div id="container3">-->
<!--            <p id="description3">Selectati telefonul dorit:-->
<!--                <br><br>-->
<!--                <input type="text" placeholder="Nume Telefon" id="telefon" name="telefon"></p>-->
<!--        </div>-->

        <br><br><br>
        <input type="submit"  id="auction" name="auction" value="Cauta">
    </form>
<!--    <button onclick="myFunction()" style="margin-left: 42.5%">Try it</button>-->

</div>
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
</body>
<video autoplay muted loop id="video">
    <source src="tech.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
</html>