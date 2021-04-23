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
            <link rel="icon" href="img/icon.png"/>
            <link rel="stylesheet" href="css/style.css"/>
            <link rel="stylesheet" href="css/menubar.css">
            <style>
                       @media print {  
                  h1 { font-size: 12pt; } 
                  h2 { font-size: 10pt; }  
                  h3 { font-size: 8pt; } 
                  p { font-size: 8pt; }     
                  h1, h2, h3 { page-break-after: avoid; } 
                }
              @page { margin: 1.0cm; }  
              </style>

    </head>
    <body>
        <header>
            <!--Menüsor létrehozása-->
            <nav class="menu">
                <ul>
                    <li><a href="kezdo.php">Kezdőoldal</a></li>
                    <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
                    <li><a href="arak.php">Árak</a></li>
                    <li><a href="referencia.php">Referenciák</a></li>
                    <li><a class="active" href="rolam.php">Rólam</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                    <li><a href="regisztracio.php">Regisztráció</a></li>
                    <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                    <li><a href="termekek.php">Speciális ajánlatok</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="tartalom">
                    <h1>Rólam</h1>
                    
                    <h2>Üdvözlöm, a nevem R. Attila.</h2>
                    <div class="rolam">
                    <pre>Immáron már több, mint 10 éve dolgozom a szakmában. 
Csapatommal együtt a fő szempontunk minden munkánál a vevő elégedettsége, 
illetve a munka precizitása.</pre>
                        <br>
                        <h3>    Ha felkeltettük a figyelmét, kérem keressen minket! <a href="kapcsolat.php"> Az alábbi oldalon található űrlap kitöltésével.</a></h3> 
                    </div>

                </section> <!--tartalom vége-->
        </main>
        <?php
footer()
?>
    </body>
</html>
