<?php 

$hostname = "localhost";
$username = "root";
$passowrd = "";
$database = "biodata_siswa";

$koneksi = new mysqli($hostname, $username, $passowrd, $database);

$sql = "SELECT * FROM berat_badan";
$row = $koneksi -> execute_query($sql) -> fetch_assoc();

?>