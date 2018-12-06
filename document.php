<html>
<style>
    input {
        width: 12%;
        padding: 12px 20px;
        margin: 5;
        border-radius: 30px;
        box-sizing: border-box;
    }
    .container{
         width: 60%;
         margin: 0 auto;
        /*background-image: linear-gradient(lightskyblue , whitesmoke);*/
        background-color: rgba(255,255,255,0.9);
        z-index: -1;
        border-radius: 25px;
    border: 5px solid #ccc;
    }
    .description, ul, li, p:not(#log){
        width: 90%;
        margin: 0 auto;
        text-align: left;
    }
     body, p {
         font-family: "Libre Baskerville", Sans-serif;
     }
     h2{
       padding-bottom: 10px; text-align: center; left: 30%; font-style: italic; font-weight: normal; font-size: 30px; padding: 0px 0px 0px 10px;
     }
    #video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -2;
    }
</style>
<body>
<div class="container">
    <h2>Această pagină este <br> deocamdată in lucru.</h2>
    <form id="doc">
    <p class="description">Mai multe detalii in curand.<br>
    </p>
        <p>The standard Lorem Ipsum passage, used since the 1500s
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

            Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

            1914 translation by H. Rackham
            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
<!--        <ul>-->
<!--            <li> <b>Tabelul <i>users</i></b> - Scopul tabelului <i>users</i> este acela de a ține evidența tutoror utilizatorilor și a informațiilor pe care aceștie le introduc cand se își creeaza contul. Cu ajutorul aplicației de login se pot efectua query-uri cu baza de date, mai exact cu tabelul users. Query-urile ce au loc pot fi descrise ca niste simple operații de verificare și adaugare a informațiilor in acest tabel. Utilizatorii noi se pot înregistra completând anumite câmpuri, iar dupa apăsarea butonului <i>Register</i>, contul este creat iar datele utilizatorului sunt introduse automat in baza de date. Fiecare câmp al tabelului stocheaza câte o informatie specifica: <i>ex: email stocheaza emailul utilizatorului. Tabelul are relatie de n-n cu tabelul tranzactii prin tabelul <i>tranzactii clienti</i>.</i></li><br>-->
<!--            <li> <b>Tabelul <i>telefoane</i></b> - Scopul tabelului <i>telefoane</i> este de a stoca informatii cu privire la telefoane. <i>phone_ID</i> (cheia primara a tabelului), <i>brand_ID</i> și <i>model_ID</i> contin informatii privind ID-ul telefonului, brand-ului de telefon si modelului. Acestea vor intra in relatie cu tabelele <i>Model</i> si <i>Brand</i>. Am considerat că un brand poate avea mai multe modele si telefoane, un model poate avea mai multe telefoane, dar un telefon nu poate avea mai multe brand-uri/modele. De aceea avem o relatie 1-n intre tabelul <i>model</i> si <i>telefoane</i> si inca o relatie 1-n intre tabelul <i>brand</i> si <i>telefoane</i>. De asemenea, exista o relatie de 1-n si intre <i>brand</i> si <i>model</i> pentru ca un brand poate produce mai multe modele si o relatie 1-n cu tabelul <i>tranzactii</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>modele</i></b> - Scopul tabelului <i>modele</i> este de a oferi informatii privind id-ul modelului, numele, culoarea si id-ul brand-ului corespunzator modelului. Are o relatie de 1-n cu tabelul <i>telefoane</i> si n-1 cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>brand</i></b> - Scopul tabelului <i>brand</i> este de a păstra informatii privind id-ul brand-ului si numele brand-ului. Cheia primara este câmpul <i>brand_ID</i>, iar tabelul are relatia de 1-n cu tabelul <i>telefoane</i> si <i>model</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>sistem operare</i></b> - Tabelul <i>sistem operare</i> contine informatii privind id-ul sistemului de operare (cheie primara), numele sistemului de operare, versiunea si daca este sau nu open-source. Tabelul are o relatie de 1-1 cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>tranzactii</i></b> - Tabelul <i>tranzactii</i> cuprinde informatii privind tranzactiile fiecarui utilizator. Tabelul contine câmpul <i>trans_id</i> care reprezintă id-ul tranzactiei, <i>phone_id</i> cae reprezinta id-ul telefonului tranzactiei curente, ultima suma licitata pentru telefon, modul de plata si data tranzactiei. Tabelul are o relatie n-n cu tabelul users care se face printr-un tabel intermediar numit <i>tranzactii clienti</i>. De asemenea exista o relatie de n-1 si cu tabelul <i>telefoane</i>.</li><br>-->
<!--            <li> <b>Tabelul <i>tranzactii clienti</i></b> - Tabelul <i>tranzactii clienti</i> este un tabel intermediar care are scopul facilitarii relatiei de n-n dintre tabelele <i>tranzactii</i> si <i>clienti</i>.</li><br>-->
<!--        </ul>-->
        </form></div>
</body>
<video autoplay muted loop id="video">
    <source src="tech.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
</html>