<?php
ob_start();//turna on output buffering

date_default_timezone_set("Africa/Dar_es_salaam");

try{
    $con = new PDO("mysql:dbname=VideoTube;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed" .$e->getMessage();

}
?>