<?php
include_once "tartalom.php";
include_once "felhasznalok.php";

if(!isset($_SESSION["user"])){
    header('Location: bejelentkezes.php');
} else {
    $datum= new DateTime();
    $datum->setTimezone(new DatetimeZone("Europe/Budapest"));
    $uzenet="";
    $osszeg=0;
    if(isset($_GET["fizetes"])){
        $uzenet="<h1>Megrendelés összesítése</h1>";
        $uzenet.="<h2>Személyes adatok</h2>";
        $uzenet.='<p>Név: '.$_SESSION["user"]->getNev().'</p>
            <p>Felhasználónév: '.$_SESSION["user"]->getFnev().'</p>
            <p>E-mail: '.$_SESSION["user"]->getEmail().'</p>
            <p>Telefonszám: '.$_SESSION["user"]->getTelszam().'</p>
            <p>Rendelés ideje: '.$datum->format("Y-m-d H:I").'</p>
            ';
$uzenet.="<h2>Termékek</h2>";
if(isset($_GET["polodb"]) && ($_GET["polodb"])>0){
    $uzenet.="<p>Színes póló</p>";
    $uzenet.="<p>Szín:".$_GET["poloszin"]."</p>";
    $uzenet.="<p>Darab:".$_GET["polodb"]."* 5000Ft</p>";
    $osszeg+=$_GET["polodb"]*5000;
        }
        if(isset($_GET["baseballdb"]) && ($_GET["baseballdb"])>0){
            $uzenet.="<p>Baseball sapka</p>";
            $uzenet.="<p>Szín:".$_GET["baseballszin"]."</p>";
            $uzenet.="<p>Darab:".$_GET["baseballdb"]."* 2500Ft</p>";
            $osszeg+=$_GET["baseballdb"]*2500;
                }
                $uzenet.='<p>Összesen: '.$osszeg.' Ft</p>';
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
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" href="img/icon.png"/>
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
                    <li><a href="regisztracio.php">Regisztráció</a></li>
                    <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                    ';
                    }else{
                    echo '
                    <li><a href="bejelentkezes.php">Profil</a></li>
                    <li><a class="active" href="specialis.php">Speciális ajánlatok</a></li> 
                    ';
                    }
                    ?>

                    </ul>
                </nav>
            </header>
            <main>

            <?php
            if(!isset($_GET["fizetes"])){
                echo '
                <h2>Kérjük támogassa cégünket azzal, hogy vásárol márkajelzésünkel ellátott termékeinkből!</h2>
                <form action="specialis.php" method="get" enctype="multipart/form-data">
                <table>
                <caption>Jelenleg rendelkezésre álló termékeink:</caption>
                <thead>
                <tr>
                    <th id="nev">Megnevezés</th>
                    <th id="ar">Ár</th>
                    <th id="mennyiseg">Mennyiség</th>
                    <th id="szin">Szín</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td headers="nev">Színes póló</td>
                    <td headers="ar">5000Ft</td>
                    <td headers="mennyiseg"><label>/DB: <input type="number" min="0" value="0" name="polodb"/></label></td>
                    <td headers="szin"><label>Szín: <input type="color" name="poloszin"/><label></td>
                </tr>
                <img src="img/tshirt.jpg" alt="tshirt" title="Illusztráció a pólóról" width="400"/>
                <img src="img/baseballcap.png" alt="baseballcap" title="Illusztráció a baseball sapkáról" width="400"/>

                <tr>
                    <td headers="nev">Baseball sapka</td>
                    <td headers="ar">2500Ft</td>
                    <td headers="mennyiseg"><label>/DB: <input type="number" min="0" value="0" name="baseballdb"/></label></td>
                    <td headers="szin"><label>Szín: <input type="color" name="baseballszin"/><label></td>
                </tr>
                </tbody>
</table>
<br/>
<input type="submit" value="Fizetés" name="fizetes"/>  
</form>  
                ';
            } else {
                echo $uzenet;
            }
            ?>    
</main>
<?php
footer()
?>
    </body>
</html>