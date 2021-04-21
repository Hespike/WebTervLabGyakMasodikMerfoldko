<?php
include_once "Users.php";
session_start();
$file = fopen("users.txt", "a+");
$_SESSION["regisztraltFelhasznalok"] = [];
while($line = fgets($file) !== false){
    $sor = unserialize($line);
    $newFelhasznalo = new Users($sor["nev"],$sor["fnev"], $sor["jelszo"],$sor["jelszoujra"], $sor["telszam"], $sor["email"], $sor["kep"]);
    array_push($_SESSION["regisztraltFelhasznalok"], $newFelhasznalo);
}
fclose($file);
?>
