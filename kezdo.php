<?php
include_once "tartalom.php";
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>A legjobb beadandó</title>
        <meta charset="UTF-8"/>
        <meta name="author" content="Deli Dorottya és Sárdi András Mihály"/>
        <meta name="description" content="Web tervezés lab. gyak. beadandó"/>
        <meta name="keywords" content="webtervezés,webterv,HTML,CSS,beadandó"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" href="img/icon.png"/>
        <link rel="stylesheet" href="css/menubar.css">
    </head> 
    
    <body>
        <header>
                <!--Menüsor létrehozása-->
                <nav class="menu">
                    <ul>
                        <li><a class="active" href="kezdo.php">Kezdőoldal</a></li>
                        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
                        <li><a href="arak.php">Árak</a></li>
                        <li><a href="referencia.php">Referenciák</a></li>
                        <li><a href="rolam.php">Rólam</a></li>
                        <li><a href="kapcsolat.php">Kapcsolat</a></li>
                        <li><a href="regisztracio.php">Regisztráció</a></li>
                        <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <section class="tartalom">
                    <section class="bemutatkozas">
                        <h1>Üdvözlöm a honlapomon!</h1>

                        <h2>A nevem R. Attila, és a csapatom villanyszereléssel foglalkozik Csongrád-<wbr>Csanád megyében és környékén! Ez a honlap a tevékenységünket hivatott bemutatni a potenciális ügyfelek számára.</h2>
                        <p>Az ügyfeleink általában a következőképpen hivatkoznak a munkánkra és ránk:</p>
                        <ul>
                            <li>Precíz</li>
                            <li><b><u>Occsó</u></b></li>
                            <li>Barátságos</li>
                        </ul>
                        <h2> Csapatunk mottója:</h2>
                        <p><q>Ki korán kel, jó villanyszerelőt lel, vagy valami hasonlót.</q> Ezenkívül az <i>Ora et labora </i> mondás is fontos része céges filozófiánknak.</p>
                        <p>Fontos kiemelnünk,<mark> hogy csapatunk csakis legális keretek között,</mark> <strong>számlával igazolható módon</strong> dolgozik. Amennyiben felkeltettük érdeklődését, keressen <em>most</em> a menüsorban található kapcsolat fülön keresztül.</p>
                    </section> <!--bemutatkozás vége-->

                    <img src="img/electrican.jpg" alt="villanyszerelő" title="Ez én vagyok munka közben" width="400"/>
                </section> <!--tartalom vége-->
            
        </main>
        <?php
footer()
?>
    </body>
</html>
