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
            <link rel="stylesheet" href="css/arak.css">

    </head>
    <body>
        <header>
                <!--Menüsor létrehozása-->
                <nav class="menu">
                    <ul>
                        <li><a  href="kezdo.php">Kezdőoldal</a></li>
                        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
                        <li><a class="active" href="arak.php">Árak</a></li>
                        <li><a href="referencia.php">Referenciák</a></li>
                        <li><a href="rolam.php">Rólam</a></li>
                        <li><a href="kapcsolat.php">Kapcsolat</a></li>
                        <li><a href="regisztracio.php">Regisztráció</a></li>
                        <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                        <li><a href="termekek.php">Speciális ajánlatok</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <section class="tartalom">
                    <h1>Árak</h1>

                    <div class="szoveg">
                        <p>Az alábbi árak az anyagár nélkül számított nettó munkadíjak, és tartalmazzák az egyszeri kiszállás, felmérés, tanácsadás, anyagbeszerzés díját is. 
                            <br>A munka jellegétől, illetve a Szegedtől való távolságtól függően az árak esetenként eltérhetnek! 
                            <br><br><strong>A feltüntetett árak csak tájékoztató jellegűek, egyéni árajánlat kérés a kapcsolat menüponton belül kérhető!</strong></p>
                    </div>

                    <!--Alap táblázat létrehozása-->
                    <section class="tablazat_alap">
                        <table class="alap">
                            <caption><strong>Alap villanyszerelési munkák</strong></caption>
                            <thead>
                                <tr>
                                <th id="munka1">Munka megnevezése</th>
                                <th id="ar1">Ár (HUF)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Hibakeresés, javítás</td>
                                <td>6000 - 12.000</td>
                                </tr>
                                <tr>
                                    <td>Gyorsszervíz díj</td>
                                    <td>10.000 - 16.000</td>
                                </tr>
                                <tr>
                                    <td>Gyorsszervíz díj <br> hétvégén és ünnepnapokon</td>
                                    <td>13.000 - 19.000</td>
                                </tr>
                                <tr>
                                    <td>Villanyóra áthelyezés /1 fázis/</td>
                                    <td>90.000 -</td>
                                </tr>
                                <tr>
                                    <td>Villanyóra áthelyezés /3 fázis/</td>
                                    <td>97.000 - </td>
                                </tr>
                                <tr>
                                    <td>Teljesítmény bővítés /1 fázis/</td>
                                    <td>25.000 - </td>
                                </tr>
                                <tr>
                                    <td>Teljesítmény bővítés /3 fázis/</td>
                                    <td>30.000 - </td>
                                </tr>
                                <tr>
                                    <td>Éjszakai áram kiépítése</td>
                                    <td>65.000 - </td>
                                </tr>
                            </tbody>
                        </table>
                    </section><!--Alap táblázat vége-->

                    <!--Túzhely táblázat létrehozása-->
                    <section class="tablazat_tuzhely">
                        <table class="tuzhely">
                            <caption><strong>Villany tűzhellyel kapcsolatos munkák</strong></caption>
                            <thead>
                                <tr>
                                    <th id="munka2">Munka megnevezése</th>
                                    <th id="ar2">Ár (HUF)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Villanytűzhely és sütő beüzemelés</td>
                                    <td>15.000 - 20.000</td>
                                </tr>
                                <tr>
                                    <td>Villanytűzhely bekötés</td>
                                    <td>13.000 - 15.000</td>
                                </tr>
                                <tr>
                                    <td>Villanytűzhely bekötés</td>
                                    <td>13.000 - 15.000</td>
                                </tr>
                                <tr>
                                    <td>Beépített villanytűzhely bekötés</td>
                                    <td>13.000 - 15.000</td>
                                </tr>
                                <tr>
                                    <td>Villanysütő bekötés</td>
                                    <td>13.000 - 15.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </section><!--Tűzhely táblázat vége-->
                    
                </section> <!--tartalom vége-->          
            </main>
            <?php
footer()
?>
    </body>
</html>
