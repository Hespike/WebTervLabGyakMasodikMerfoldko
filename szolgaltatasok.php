<?php
include_once "tartalom.php";
include_once "felhasznalok.php";
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>A legjobb beadandó</title>
            <meta charset="UTF-8"/>
            <meta name="author" content="Deli Dorottya és Sárdi András Mihály"/>
            <meta name="description" content="Web tervezés lab. gyak. beadandó"/>
            <meta name="keywords" content="webtervezés,webterv,HTML,CSS,beadandó"/>
            <link rel="icon" href="img/icon.png"/>
            <link rel="stylesheet" href="css/style.css"/>
            <link rel="stylesheet" href="css/menubar.css">
            

    </head>
    <body>
        <header>
            <!--Menüsor létrehozása-->
            <nav class="menu">
                  <ul>
                        <li><a  href="kezdo.php">Kezdőoldal</a></li>
                        <li><a class="active" href="szolgaltatasok.php">Szolgáltatások</a></li>
                        <li><a href="arak.php">Árak</a></li>
                        <li><a href="referencia.php">Referenciák</a></li>
                        <li><a href="rolam.php">Rólam</a></li>
                        <li><a href="kapcsolat.php">Kapcsolat</a></li>
                        <?php
                        if(!isset($_SESSION["user"])){
                        echo ' 
                        <li><a href="regisztracio.php">Regisztráció</a></li>
                        <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                        
                        ';
                        }else{
                           echo '
                        <li><a href="bejelentkezes.php">Profil</a></li>
                        <li><a href="specialis.php">Speciális ajánlatok</a></li> 
                        ';
                        }
                        ?>
                </ul>
            </nav>
        </header>
        <main>
                <section class="tartalom">
                    <h1>Szolgáltatások</h1>
                    <p>A tevékenységünk során figyelembe vesszük az alábbi, easykit.hu oldaláról idézett részt: </p>
                    <blockquote cite="https://easykit.hu/villanyszereles-tippek/">
                        Az otthonunk munkálatait közül – ilyen több között a villanyszerelés is – egy bizonyos szintig mi magunk is eltudjuk végezni, betartva a biztonsági előírásokat. Ahhoz, hogy a villanyszerelés sikeres legyen szükséges egy jól kidolgozott terv, ami lépésről-lépesre végig vezet az adott munkafolyamaton. Természetesen a munka ellenőrzése elengedhetetlen egy szakember által, de a feladatok döntő többségét mi magunk is el tudjuk végezni. Az Easykit minden segítséget és szakmai támogatást megad, így saját magunk is el tudjuk végezni a villanyszerelést.
                        </blockquote>
                        <br>
                    <p>Az alábbi lebegőkeret az egyik partnercégünk által elérhető szolgáltatásokat tartalmazza, a <cite>Villanyszerelő-Budapesten</cite> című dokumentumot. az Árak fülnél megtalálható tevékenységek mellett  ezekkel a feladatokkal is foglalkozik cégünk.</p>
                    <iframe src="https://www.villanyszerelo-budapesten.hu/szolgaltatasok.htm" width="1000" height="600"></iframe>     
                </section> <!--tartalom vége-->
                <!--Oldalsáv létrehozása-->
                <aside>
                    <h3>Szolgáltatásaink</h3>
                    <br>
                    <ul>
                        <li>Alap villanyszerelési munkák</li>
                        <li>Villanytűzhely bekötés, javítás</li>
                        <li>S.O.S. villanybajok</li>
                    </ul>
                </aside><!--Oldalsáv vége-->
                <!--Lábléc létrehozása-->
    
        </main>
        <?php
footer()
?>
    </body>
</html>
