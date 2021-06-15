<?php
include 'model.php';
$id= $_GET['id'];
$model = new Model();
$data = $model->edit_karyawan($id);
?>
<html>
    <head>
        <title>TAMBAH DATA KARYAWAN</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<Body>
<?php
            include 'navbar.php';
        ?>
       
    <div class="container-fluid">
    <h1>Tambah</h1>
    <a href="karyawan.php">Kembali</a>
    <br><br>
        <form action="proces.php" method="post">
        <div class="col-3">
        <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" name="id" value="<?= $data->id?>" class="form-control" readonly>
            </div>
        <div class="mb-3">
                <label class="form-label">NAMA KARYAWAN</label>
                <input type="text" name="nama"  value="<?= $data->nama_karyawan?>" class="form-control datepicker">
            </div>
            <div class="mb-3">
                    <label class="form-label">Kode Kategori</label>
                    <select name="gaji_id" class="form-select">
                        <?php
                            $result = $model->tampil_karyawan();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                        <option value="<?= $data->gaji_id ?>"><?=$data->gaji_id?> - <?=$data->gaji?></option>
                        <?php endforeach; } ?>
                    </select>
            </div> 
            <div class="mb-3">
                <label class="form-label">STOCK</label>
                <input type="text" name="alamat"  value="<?= $data->alamat?>" class="form-control datepicker">
            </div> 
            <button type="submit" name="submit_edit_karyawan" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</Body>
</html>