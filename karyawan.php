<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Karyawan</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<body>

        <?php
            include 'navbar.php';
        ?>
        
    <div class="container-fluid">
        <h1 align="center">DATA KARYAWAN</h1>
        <a href="tambah_karyawan.php"> Tambah Data</a><br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID </th>
                    <th>Nama Karyawan</th>
                    <th>Gaji ID</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $result = $model->tampil_karyawan();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                   <td><?= $index++ ?></td>
                   <td><?= $data->id?></td>
                   <td><?= $data->nama_karyawan ?></td>
                   <td><?= $data->gaji_id ?></td>
                   <td><?= $data->alamat ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_barang.php?id=<?=$data->id?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->id?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="6" align="center">Belum Ada Data Pada Tabel Karyawan</td>
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