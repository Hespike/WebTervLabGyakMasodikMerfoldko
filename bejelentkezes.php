<?php
include_once "tartalom.php";
include_once "felhasznalok.php";

if (isset($_POST["bej"])){
    if (isset($_POST["fnevbe"]) && isset($_POST["jelszobe"])){
        $belepes = false;
        foreach ($_SESSION["regisztraltFelhasznalok"] as $userobj){
            if ($userobj->getFnev()==$_POST["fnevbe"] && $userobj->getJelszo() == $_POST["jelszobe"]){
                $belepes = true;
                $_SESSION["user"]=$userobj;
                break;
            }
        }
        if (!$belepes){
            die("<strong>Hiba: </strong> Sikertelen bejelentkezés, az egyik adat helytelen! <a href='bejelentkezes.php'>Vissza a bejelentkezési oldalra.</a>");
        }
    }else{
        die("<strong>Hiba: </strong> Sikertelen bejelentkezés, az egyik mező nem lett kitöltve! <a href='bejelentkezes.php'>Vissza a bejelentkezési oldalra.</a>");
    }
}
if (isset($_POST["ki"])){
    session_unset();
    session_destroy();
}
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
            <li><a href="kapcsolat.php">Kapcsolat</a></li>
            <li><a href="regisztracio.php">Regisztráció</a></li>
            <li><a class="active" href="bejelentkezes.php">Bejelentkezés</a></li>

        </ul>
    </nav>
</header>
<main>
    <section class="tartalom">
        <h1>Bejelentkezés</h1>
        <?php
            if (!isset($_SESSION["user"])){
                echo '
                <form id="bejelentkezes" action="bejelentkezes.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Bejelentkezés</legend>
                <label for="fnevbe">Felhasználónév</label>
                <br/>
                <input required type="text" id="fnevbe" name="fnevbe" tabindex="1"/>
                <br/>
                <label for="jelszobe">Jelszó</label>
                <br/>
                <input required type="password" id="jelszobe" name="jelszobe" tabindex="2" placeholder="*******"/>
                <br/>
                <br/>
                <input type="submit" value="Bejelentkezés" name="bej"/>
            </fieldset>
        </form>
                ';
            }else{
                echo '
                    <img src="profil/'.$_SESSION["user"]->getKep().'" alt="profilkep" width="200"/>
                    <p>Név: '.$_SESSION["user"]->getNev().'</p>
                    <p>Felhasználónév: '.$_SESSION["user"]->getFnev().'</p>
                    <p>E-mail: '.$_SESSION["user"]->getEmail().'</p>
                    <p>Telefonszám: '.$_SESSION["user"]->getTelszam().'</p>
                    <form id="kijelentkezes" action="bejelentkezes.php" method="post" enctype="multipart/form-data">
                    <input type="submit" value="Kijelentkezés" name="ki">
                    </form>
                ';
            }
        ?>



    </section> <!--tartalom vége-->
    <?php
    footer();
    ?>
</main>
</body>
</html>


