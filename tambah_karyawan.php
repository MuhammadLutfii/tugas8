<?php
    include 'model.php';
    $model = new Model();

?>
<html>
    <head>
        <title>Tambah Data Karyawan</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<Body>
<?php
            include 'navbar.php';
        ?>

    <div class="container-fluid">
    <h1>Tambah Data</h1>
    <a href="karyawan.php">Kembali</a>
    <br><br>
        <form action="proces.php" method="post">
        <div class="col-3">
        <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" name="id" class="form-control datepicker">
            </div>
        <div class="mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control datepicker">
            </div>
            <div class="mb-3">
                    <label class="form-label">GAJI ID</label>
                    <select name="id_kategori" class="form-select">
                        <?php
                            $result = $model->tampil_gaji();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                        <option value="<?= $data->gaji_id ?>"><?=$data->gaji_id?> - <?=$data->gaji_pokok?></option>
                        <?php endforeach; } ?>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control datepicker">
            </div>
             

            <button type="submit" name="submit_karyawan" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</Body>
</html>