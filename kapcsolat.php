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
                    <li><a href="referencia.php">Referenciák</a></li>
                    <li><a href="rolam.php">Rólam</a></li>
                    <li><a class="active" href="kapcsolat.php">Kapcsolat</a></li>
                    <li><a href="regisztracio.php">Regisztráció</a></li>
                    <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="tartalom">
                <h1>Kapcsolat</h1>
                <div class="arajanlat">
                    <h2>Szolgáltatásunk egyedi jellege miatt érdemes lehet személyre szabott árajánlatot kérni.</h2>
                    <form method="POST">
                    <fieldset>
                    <legend>Személyre szabott árajánlat kérése:</legend>
                      
                            <label>Teljes név: <input type="text" name="valodinev" placeholder="Név" maxlength="25" required/> </label> <br/>
                            <label>Telefonszám:  <input type="tel" name="telefonszam" placeholder="Telefonszám " maxlength="11" required/> </label> <br/>
                            <label>Prémium kupon-kód: <input type="password" name="kupon" placeholder="Kupon-kód" required/></label> <br/>
                            <label>Prémium kupon-kód ismét: <input type="password" name="kuponcheck" placeholder="Kupon-kód ismét" required/></label> <br/>
                            <label>E-mail: <input type="email" name="email"  placeholder="E-mail cím" required/></label> <br/>
                        </fieldset>
                        <fieldset>
                            <legend>Probléma körülhatárolása:</legend>
                            <label for="op1">Általános jellegű:</label>
                            <input type="radio" id="op1" name="problema" value="alt"  checked/>
                            <label for="op2">Speciális probléma:</label>
                            <input type="radio" id="op2" name="problema" value="spe"/>
                            <label for="op3">Egyéb:</label>
                            <input type="radio" id="op3" name="problema" value="egy"  /> <br/>
                            <label>Probléma leírása: <br/> <textarea name="feedback" rows="5" cols="50" maxlength="200" required
                            placeholder="Kérem írja meg az Ön által tapasztalt problémát(max. 200 karakter)!"></textarea></label> <br/>
                            <label>Kép csatolása a problémáról: <input type="file" name="problema"/></label> <br/>
                        </fieldset> 
                            <fieldset>
                                <legend>Speciális kérések:</legend>
                                <label for="keres1">Gyors kiszállás:</label>
                                  <input type="checkbox" id="keres1" name="keres1" value="expressz"/>
                                <label for="keres2">Teljes áramkör csere:</label>
                                <input type="checkbox" id="keres2" name="keres2" value="teljes"/>
                            </fieldset> 
                            
                            
                            <input type="reset" name="reset-btn" value="Adatok törlése"/>
                            <input type="submit" value="Árajánlat kérése"/>
                            </form>
                         
                </div>
            </section> <!--tartalom vége-->
        </main>
<?php
footer()
?>
    </body>
</html>
