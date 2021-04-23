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
if(isset($_GET["alomdb"]) && ($_GET["alomdb"])>0){
    $uzenet.="<p>Színes macskaalom</p>";
    $uzenet.="<p>Szín:".$_GET["alomszin"]."</p>";
    $uzenet.="<p>Darab:".$_GET["alomdb"]."* 3000FT</p>";
    $osszeg+=$_GET["alomdb"]*3000;
        }
        if(isset($_GET["wcdb"]) && ($_GET["wcdb"])>0){
            $uzenet.="<p>Macska wc</p>";
            $uzenet.="<p>Szín:".$_GET["wcszin"]."</p>";
            $uzenet.="<p>Darab:".$_GET["wcdb"]."* 1000</p>";
            $osszeg+=$_GET["wcdb"]*1000;
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
                        <li><a href="kezdo.php">Kezdőoldal</a></li>
                        <li><a href="szolgaltatasok.php">Szolgáltatások</a></li>
                        <li><a href="arak.php">Árak</a></li>
                        <li><a href="referencia.php">Referenciák</a></li>
                        <li><a href="rolam.php">Rólam</a></li>
                        <li><a href="kapcsolat.php">Kapcsolat</a></li>
                        <li><a href="regisztracio.php">Regisztráció</a></li>
                        <li><a href="bejelentkezes.php">Bejelentkezés</a></li>
                        <li><a class="active" href="termekek.php">Speciális ajánlatok</a></li>

                    </ul>
                </nav>
            </header>
            <main>

            <?php
            if(!isset($_GET["fizetes"])){
                echo '
                <h2>Termékeink</h2>
                <form action="termekek.php" method="get" enctype="multipart/form-data">
                <table>
                <caption>Színes termékek</caption>
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
                    <td headers="nev">Színes macskaalom</td>
                    <td headers="ar">3000</td>
                    <td headers="mennyiseg"><label>DB: <input type="number" min="0" value="0" name="alomdb"/></label></td>
                    <td headers="szin"><label>Szín: <input type="color" name="alomszin"/><label></td>
                </tr>
                <tr>
                    <td headers="nev">Macska wc</td>
                    <td headers="ar">1000</td>
                    <td headers="mennyiseg"><label>DB: <input type="number" min="0" value="0" name="wcdb"/></label></td>
                    <td headers="szin"><label>Szín: <input type="color" name="wcszin"/><label></td>
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
