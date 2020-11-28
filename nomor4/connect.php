<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "crud_db";

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    echo "gagal";
}
?>