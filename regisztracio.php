<?php
include_once "tartalom.php";
include_once "felhasznalok.php";
$fnevfoglalt=false;
$uzenet="";


if(isset($_POST["submit-btn"])) {
    if (!isset($_POST["nev"]) || !isset($_POST["fnev"]) || !isset($_POST["jelszo"])
        || !isset($_POST["telszam"]) || !isset($_POST["email"])) {
        die("<strong>HIBA:</strong> Nincs minden kötelező mező kitöltve! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    }
    if (strlen($_POST["fnev"])<5){
        die("<strong>HIBA:</strong> A felhasználónévnek legalább 5 karakter hosszúnak kell lennie! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    }
    if (strlen($_POST["jelszo"]) < 8) {
        die("<strong>HIBA:</strong> A jelszónak legalább 8 karakter hosszúnak kell lennie! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    }
    if (strlen($_POST["jelszo"]) > 12) {
        die("<strong>HIBA:</strong> A jelszó nem lehet több mint 12 karakter! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    }
    if ($_POST["jelszo"] !== $_POST["jelszoujra"]) {
        die("<strong>HIBA:</strong> A két jelszónak meg kell egyeznie! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    }
    for ($i = 0; $i < count($_SESSION["regisztraltFelhasznalok"]); $i++) {
        if ($_SESSION["regisztraltFelhasznalok"][$i]->getFnev() == $_POST["fnev"]) {
            $fnevfoglalt = true;
        }
    }
    if ($fnevfoglalt) {
        die("<strong>HIBA:</strong> A felhasználónév már foglalt! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
    } else {
        if (isset($_FILES["kep"])) {
            $kiterjesztesek = ["jpg", "png"];
            $kepkiterjesztes = strtolower(pathinfo($_FILES["kep"]["name"], PATHINFO_EXTENSION));
            if (in_array($kepkiterjesztes, $kiterjesztesek)) {
                if ($_FILES["kep"]["error"] === 0) {
                    if ($_FILES["kep"]["size"] <= 31457280) {
                        $cel = "profil/" . $_POST["fnev"] . "." . $kepkiterjesztes;
                        if (move_uploaded_file($_FILES["kep"]["tmp_name"], $cel)) {
                            $uzenet .= "Sikeres fájlfeltötlés!";
                        } else {
                            die("<strong>HIBA:</strong> A kép átmozgatása nem sikerült! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
                        }
                    } else {
                        die("<strong>HIBA:</strong> A kép mérete túl nagy! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
                    }
                } else {
                    die("<strong>HIBA:</strong> A kép feltöltése során hiba lépett fel, a kép feltöltése sikertelen!! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
                }
            } else {
                die("<strong>HIBA:</strong> A kép kiterjesztése nem megfelelő! <a href='regisztracio.php'>Vissza a Regisztrációhoz</a>");
            }
        }
        $uj = new User($_POST["nev"], $_POST["fnev"], $_POST["jelszo"], $_POST["jelszoujra"], $_POST["telszam"], $_POST["email"], $_POST["fnev"].".".$kepkiterjesztes);
        array_push($_SESSION["regisztraltFelhasznalok"], $uj);
        $uj->kiir();
        $uzenet .= "\nSikeres regisztráció!";
    }
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
                <li><a  href="kezdo.php">Kezdőoldal</a></li>
        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
        <li><a href="arak.php">Árak</a></li>
        <li><a href="referencia.php">Referenciák</a></li>
        <li><a href="rolam.php">Rólam</a></li>
        <li><a href="kapcsolat.php">Kapcsolat</a></li>
        <?php
        if(!isset($_SESSION["user"])){
        echo ' 
        <li><a class="active" href="regisztracio.php">Regisztráció</a></li>
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
                    <h1>Regisztráció</h1>
                    <div class="regisztracio">
                        <?php
                        echo "<p>".$uzenet."</p>"
                        ?>
                        <br/>
                        <form method = "post" action="regisztracio.php" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Regisztráljon, hogy hamarabb értesüljön híreinkről, és hogy megtekinthesse speciális ajánlatainkat:</legend>
                                <label for="nev">Teljes név:</label>
                                 <input required type="text" id="nev" name="nev" maxlength="25" tabindex="1" placeholder="Példa Béla">
                                <br/>
                                <label for="fnev">Felhasználónév:</label>
                                <input required type="text" id="fnev" name="fnev" maxlength="25" tabindex="2" >
                                <br/>
                                <label for="jelszo">Jelszó:</label>
                                <input required type="password" id="jelszo" name="jelszo" maxlength="12" placeholder="*********" tabindex="3" >
                                <br/>
                                <label for="jelszoujra">Jelszó ismét:</label>
                                <input required type="password" id="jelszoujra" name="jelszoujra" maxlength="12" placeholder="*********" tabindex="4" >
                                <br/>
                                <label for="telszam">Telefonszám:</label>
                                <input required type="tel" id="telszam" name="telszam" maxlength="11" placeholder="06701234567" tabindex="5" >
                                <br/>
                                <label required for="email">E-mail cím:</label>
                                <input required type="email" id="email" name="email" tabindex="6" placeholder="valami@valami.hu" />
                                <br/>
                        </fieldset>

                            <label for="kep">Profilkép: </label>
                            <br/>
                            <input required type="file" id="kep" name="kep" accept="image/*" tabindex="7"/>
                            <br/>
                            <br/>
                            <input required type="checkbox" name="elfogad" id="elfogad" tabindex="8">
                            <label for="elfogad">Megadott személyes adataim kezeléséhez hozzájárulok.</label>

                            <br/>
                            <br/>

                        <input type="reset" name="reset-btn" value="Adatok törlése" tabindex="9"/>
                        <input type="submit" name="submit-btn" value="Regisztráció" tabindex="10"/>
                        </form>

                    </div>


                </section> <!--tartalom vége-->
            <?php
            footer();
            ?>
        </main>

    </body>
</html>
