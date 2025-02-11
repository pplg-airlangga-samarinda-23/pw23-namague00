<?php 

require "koneksi.php";

if ($_SERVER ["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM berat_badan WHERE id=?";
    $row = $koneksi -> execute_query($sql,[$id]) -> fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $berat = $_POST["berat"];
    $bulan = $_POST["bulan"];
    $tinggi = $_POST["tinggi"];
    $umur = $_POST["umur"];
    $id = $_GET['id'];

    $sql = "UPDATE berat_badan SET berat=? , bulan=?, tinggi=?, umur=? WHERE id=?";
    $row = $koneksi ->execute_query($sql,[$berat,$bulan,$tinggi,$umur,$id]);

    if($row){
    header("location:barang.php");
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
    <h1 style="font-size: large;">edit barang</h1>
    <form action="" method="post">
        <div>
            <label for="berat">berat</label>
            <input type="number" name="berat" id="berat" value="<?= $row['berat']; ?>">

        </div>
        <div>
        <tr>
            <th>
                <label for="bulan">bulan</label><br>
                <select name="bulan" id="bulan">
                    <option value="januari"<?= ($row['bulan'] === "januari") ? "selected" : ""; ?>>januari</option>
                    <option value="februari"<?= ($row['bulan']=== "februari") ? "selected" : ""; ?>>februari</option>
                    <option value="maret"<?= ($row['bulan']=== "maret") ? "selected" : "";?>>maret</option>
                    <option value="april"<?= ($row['bulan']=== "april") ? "selected" : "";?>>april</option>
                    <option value="mei"<?= ($row['bulan']=== "mei") ? "selected" : "";?>>mei</option>
                    <option value="juni"<?= ($row['bulan']=== "juni") ? "selected" : "";?>>juni</option>
                    <option value="juli"<?= ($row['bulan']=== "juli") ? "selected" : "";?>>juli</option>
                    <option value="agustus"<?= ($row['bulan']=== "agustus") ? "selected" : "";?>>agustus</option>
                    <option value="september"<?= ($row['bulan']=== "september") ? "selected" : "";?>>september</option>
                    <option value="oktober"<?= ($row['bulan']=== "oktober") ? "selected" : "";?>>oktober</option>
                    <option value="november"<?= ($row['bulan']=== "november") ? "selected" : "";?>>november</option>
                    <option value="desember"<?= ($row['bulan']=== "desember") ? "selected" : "";?>>desember</option>
                </select>
            </th>
        </tr>
        </div>
        <div>
            <label for="tinggi">tinggi</label>
            <input type="number" name="tinggi" id="tinggi" value="<?= $row['tinggi']; ?>">
        </div>
        <div>
            <label for="umur">umur</label>
            <input type="number" name="umur" id="umur" value="<?= $row['umur']; ?>">
        </div>
        <button type="submit">submit</button>
    </form>
    <a href="berat_badan.php">balek</a>
</body>
</html>