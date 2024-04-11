<?php
$kasutaja = "Harry";
$dbserver = "localhost";
$andmebaas = "drooniralli";
$pw = "MySQLParool1";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);

if (!$yhendus) {
    die("Sa jälle ebaõnnestusid!");
}

s
?>