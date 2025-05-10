<?php
$servername="localhost";
$username="iberrtech_db";
$password="u-e7[dUm4ldx";
$dbname="iberrtech_db";

$mysqli= new mysqli($servername,$username,$password,$dbname);
if($mysqli->connect_error){
    die ("connectio faild:" . $mysqli->connect_error);
}
/*

$password="nLSi8Qb)ViMh";

*/


?>
