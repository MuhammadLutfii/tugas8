<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Gaji Karyawan</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<body>
        <?php
            include 'navbar.php';
        ?>
    <div class="container-fluid">
        <h1 align="center">DATA GAJI KARYAWAN</h1>
        <a href="tambah_gaji.php"> Tambah Data</a><br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gaji ID</th>
                     <th>Gaji Pokok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $result = $model->tampil_gaji();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                   <td><?= $index++ ?></td>
                   <td><?= $data->gaji_id?></td>
                   <td><?= $data->gaji_pokok ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_kategori.php?id=<?=$data->gaji_id?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->gaji_id?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="4">Belum Ada Data Pada Tabel Gaji</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>