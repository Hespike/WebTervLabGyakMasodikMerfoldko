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
        

    </head>
    <body>
        <header>
            <!--Menüsor létrehozása-->
            <nav class="menu">
                <ul>
                    <li><a href="kezdo.php">Kezdőoldal</a></li>
                    <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
                    <li><a href="arak.php">Árak</a></li>
                    <li><a class="active" href="referencia.php">Referenciák</a></li>
                    <li><a href="rolam.php">Rólam</a></li>
                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="tartalom">
        
                <h1>Referenciák</h1>
                <h2>Egy komplex elektronikai probléma megoldása</h2>
                <video controls width="360">
                    <source src="video/komplexproblem.mp4" type="video/mp4"/>
                    Az Ön böngészője nem támogatja a videó lejátszásást.
                </video>
            </section> <!--tartalom vége-->
    
        </main>
        <?php
footer()
?>
    </body>
</html>