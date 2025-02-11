<?php

require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $berat = $_POST["berat"];
    $bulan = $_POST["bulan"];
    $tinggi = $_POST["tinggi"];
    $umur = $_POST["umur"];

    $sql = "INSERT INTO berat_badan(berat,bulan,tinggi,umur)values (?,?,?,?)";
    $row = $koneksi -> execute_query($sql,[$berat,$bulan,$tinggi,$umur]);

    if($row){
        header("location:berat_badan.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tambah info</h1>
    <form action="" method="post">
    <table>
        <tr>
            <th>
                <label for="berat">berat</label><br>
                <input type="number" name="berat">
            </th>
        </tr>
        <tr>
            <th>
                <label for="bulan">bulan</label><br>
                <select name="bulan">
                    <option value="januari">januari</option>
                    <option value="februari">februari</option>
                    <option value="maret">maret</option>
                    <option value="april">april</option>
                    <option value="mei">mei</option>
                    <option value="juni">juni</option>
                    <option value="juli">juli</option>
                    <option value="agustus">agustus</option>
                    <option value="september">september</option>
                    <option value="oktober">oktober</option>
                    <option value="november">november</option>
                    <option value="desember">desember</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>
                <label for="tinggi">$tinggi</label><br>
                <input type="number" name="tinggi">
            </th>
        </tr>

        <tr>
            <th>
                <label for="umur">umur</label><br>
                <input type="number" name="umur">
            </th>
        </tr>
    </table>
    <button type="submit">submit</button><br>
    </form>
    <a href="berat_badan.php">kembali</a>
</body>
</html>