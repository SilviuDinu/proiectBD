<html>
<style>
    input {
        width: 12%;
        padding: 12px 20px;
        margin: 5;
        border-radius: 30px;
        box-sizing: border-box;
        outline: none;
    }
    .container{
         width: 60%;
         margin: 0 auto;
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.88);
        z-index: -1;
        border-radius: 25px;
    border: 5px solid #ccc;
        height: auto;
    }
    .description, ul, li, p:not(#log){
        width: 90%;
        margin: 0 auto;
        text-align: left;
    }
    p#description2{
        width: 90%;
        margin: 0 auto;
        text-align: center;
        position: absolute;
        top: 45.8%;
        right: 0;
        left: 0;
    }
    p#description3{
        width: 90%;
        margin: 0 auto;
        text-align: right;
        position: absolute;
        top: 45.8%;
        right: 24%;
        /*left: 0;*/
    }
    #model{
          position: absolute;
          top: 52%;
          right: 0;
          left: 43%;
      }
    #telefon{
        position: absolute;
        top: 52%;
        right: 0;
        left: 64.5%;
    }
     body, p {
         font-family: "Libre Baskerville", Sans-serif;
     }
     h2, h1{
        text-align: center; left: 30%; font-style: italic; font-weight: normal; font-size: 30px; padding: 0px 0px 0px 10px;
     }
    #video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -2;
    }
    #doc{
        width: 100%;
        margin: 0 auto;
    }
    select{
        margin-left: 5%;
        /*margin-right: 90%;*/
        height: 40px !important;
        width: 15%;
        text-align: center;
       font: inherit !important;
    }
    input#auction{
        margin-left: 33.7%;
        width: 30%;
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
    }   input {
            width: 12%;

            margin: 5;
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
    }   button {
            width: 12%;

            margin: 5;
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
        <form action="products.php" method="post" id="doc"><p class="description">Selectati brand-ul dorit:</p>
            <br><br><select name="telefoane" style="height: 20px;">
                <option value="apple">Apple</option>
                <option value="samsung">Samsung</option>
                <option value="oneplus">Oneplus</option>
            </select>
            <br><br>
            <div id="container2">
                <p id="description2">Selectati modelul-ul dorit:</p>
                <br><br>
                <input type="text" placeholder="Model telefon" id="model" name="model"><br><br>
            </div>
            <div id="container3">
                <p id="description3">Selectati telefonul dorit:</p>
                <br><br>
                <input type="text" placeholder="Nume Telefon" id="telefon" name="telefon"><br><br>
            </div>

            <input type="submit"  id="auction" name="auction" value="Liciteaza">
        </form>
    <button onclick="myFunction()" style="margin-left: 42.5%">Try it</button>
<!--        <ul>-->
<!--            <li> <b>Tabelul <i>users</i></b> - Scopul tabelului <i>users</i> este acela de a ține evidența tutoror utilizatorilor și a informațiilor pe care aceștie le introduc cand se își creeaza contul. Cu ajutorul aplicației de login se pot efectua query-uri cu baza de date, mai exact cu tabelul users. Query-urile ce au loc pot fi descrise ca niste simple operații de verificare și adaugare a informațiilor in acest tabel. Utilizatorii noi se pot înregistra completând anumite câmpuri, iar dupa apăsarea butonului <i>Register</i>, contul este creat iar datele utilizatorului sunt introduse automat in baza de date. Fiecare câmp al tabelului stocheaza câte o informatie specifica: <i>ex: email stocheaza emailul utilizatorului. Tabelul are relatie de n-n cu tabelul tranzactii prin tabelul <i>tranzactii clienti</i>.</i></li><br>-->
<!--            <li> <b>Tabelul <i>telefoane</i></b> - Scopul tabelului <i>telefoane</i> este de a stoca informatii cu privire la telefoane. <i>phone_ID</i> (cheia primara a tabelului), <i>brand_ID</i> și <i>model_ID</i> contin informatii privind ID-ul telefonului, brand-ului de telefon si modelului. Acestea vor intra in relatie cu tabelele <i>Model</i> si <i>Brand</i>. Am considerat că un brand poate avea mai multe modele si telefoane, un model poate avea mai multe telefoane, dar un telefon nu poate avea mai multe brand-uri/modele. De aceea avem o relatie 1-n intre tabelul <i>model</i> si <i>telefoane</i> si inca o relatie 1-n intre tabelul <i>brand</i> si <i>telefoane</i>. De asemenea, exista o relatie de 1-n si intre <i>brand</i> si <i>model</i> pentru ca un brand poate produce mai multe modele si o relatie 1-n cu tabelul <i>tranzactii</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>modele</i></b> - Scopul tabelului <i>modele</i> este de a oferi informatii privind id-ul modelului, numele, culoarea si id-ul brand-ului corespunzator modelului. Are o relatie de 1-n cu tabelul <i>telefoane</i> si n-1 cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>brand</i></b> - Scopul tabelului <i>brand</i> este de a păstra informatii privind id-ul brand-ului si numele brand-ului. Cheia primara este câmpul <i>brand_ID</i>, iar tabelul are relatia de 1-n cu tabelul <i>telefoane</i> si <i>model</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>sistem operare</i></b> - Tabelul <i>sistem operare</i> contine informatii privind id-ul sistemului de operare (cheie primara), numele sistemului de operare, versiunea si daca este sau nu open-source. Tabelul are o relatie de 1-1 cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>tranzactii</i></b> - Tabelul <i>tranzactii</i> cuprinde informatii privind tranzactiile fiecarui utilizator. Tabelul contine câmpul <i>trans_id</i> care reprezintă id-ul tranzactiei, <i>phone_id</i> cae reprezinta id-ul telefonului tranzactiei curente, ultima suma licitata pentru telefon, modul de plata si data tranzactiei. Tabelul are o relatie n-n cu tabelul users care se face printr-un tabel intermediar numit <i>tranzactii clienti</i>. De asemenea exista o relatie de n-1 si cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>tranzactii clienti</i></b> - Tabelul <i>tranzactii clienti</i> este un tabel intermediar care are scopul facilitarii relatiei de n-n dintre tabelele <i>tranzactii</i> si <i>clienti</i>.</li><br>-->
<!--        </ul>-->
        </div>
</body>
<video autoplay muted loop id="video">
    <source src="tech.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
</html>