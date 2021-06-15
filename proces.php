<?php
    include 'model.php';

    //gaji
    if (isset($_POST['submit_gaji'])) {
        $gaji_id = $_POST['gaji_id'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $model = new Model();
        $model->insert_gaji($gaji_id,$gaji_pokok);
        header('location:gaji.php');
    }
    if (isset($_POST['submit_edit'])) {
        $gaji_id = $_POST['gaji_id'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $model = new Model();
        $model->update_gaji($gaji_id,$gaji_pokok);
        header('location:gaji.php');
    }
    if (isset($_GET['id'])) {    
        $id = $_GET['id']; 
        $model = new Model();     
        $model->delete_gaji($id);     
        header('location:gaji.php'); 
    } 
       //karyawan
       if (isset($_POST['submit_karyawan'])) {
        $id = $_POST['id'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $gaji_id = $_POST['gaji_id'];
        $alamat = $_POST['alamat'];

        $model = new Model();
        $model->insert_karyawan($id,$nama_karyawan,$gaji_id,$alamat);
        header('location:karyawan.php');
    }
    if (isset($_POST['submit_edit_karyawan'])) {
        $id = $_POST['id'];
        $nama_karyawan = $_POST['nama_karyawan'];
        $alamat = $_POST['alamat'];
        $gaji_id = $_POST['gaji_id'];

        $model = new Model();
        $model->update_karyawan($id,$nama_karyawan,$gaji_id,$alamat);
        header('location:karyawan.php');
    }
    if (isset($_GET['id'])) {    
        $id = $_GET['id']; 
        $model = new Model();     
        $model->delete_karyawan($id);     
        header('location:karyawan.php'); 
    } 