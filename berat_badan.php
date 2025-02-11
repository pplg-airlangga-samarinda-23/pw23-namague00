<?php 

require "koneksi.php";

$sql = "SELECT * FROM berat_badan";
$rows = $koneksi ->execute_query($sql) -> fetch_all( MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman berat_badan</h1>
    <table>
        <a href="berat_tambah.php">tambah data</a><br>
        <thead>
            <th>no</th>
            <th>berat</th>
            <th>bulan</th>
            <th>tinggi</th>
            <th>umur</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php $no = 0;foreach ($rows as $row): ?>
            <tr>
                <td><?= ++$no; ?></td>
                <td><?php echo $row["berat"]; ?></td>
                <td><?php echo $row["bulan"]; ?></td>
                <td><?php echo $row["tinggi"]; ?></td>
                <td><?php echo $row["umur"]; ?></td>
                <td>
                    <a href="edit_berat.php?id=<?=$row['id']?>">Edit</a>
                    <a href="hapus.php?id=<?=$row['id']?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
```
        </tbody>
    </table>
 </body>
 </html>