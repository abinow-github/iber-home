<?php
$servername="localhost";
$username="vivlbiua_iberrtech_archidecorsa";
$password="vivlbiua_iberrtech_archidecorsa";
$dbname="vivlbiua_iberrtech_archidecorsa";

$mysqli= new mysqli($servername,$username,$password,$dbname);
if($mysqli->connect_error){
    die ("connectio faild:" . $mysqli->connect_error);
}
define('BASE_URL', 'http://localhost/archidecorsa');
?>

