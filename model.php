<?php
    include 'koneksi.php';

    class Model extends Connection{

        public function __construct(){
            $this->conn = $this->get_connection();
        }
       //gaji
        public function insert_gaji($gaji_id,$gaji_pokok){
            $sql = "INSERT INTO tbl_gaji (gaji_id, gaji_pokok) VALUES ('$gaji_id', '$gaji_pokok')";
            $this->conn->query($sql);
        }
        public function tampil_gaji(){

            $sql = "SELECT * FROM tbl_gaji";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function edit_gaji($id){
            $sql = "SELECT * FROM tbl_gaji WHERE gaji_id = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
        public function update_gaji($gaji_id,$gaji_pokok){
            $sql = "UPDATE tbl_gaji set gaji = '$gaji_id' WHERE gaji_id = '$gaji_id'";
            $this->conn->query($sql);
        }
        public function delete_gaji($id) 
 	{ 
    
    $sql = "DELETE FROM tbl_gaji WHERE gaji_id='$id'"; 
    $this->conn->query($sql); 
} 
   //karyawan
   public function insert_karyawan($id,$nama_karyawan,$gaji_id,$alamat){
    $sql = "INSERT INTO tbl_karyawan (id,nama_karyawan,gaji_id,alamat) VALUES ('$id','$nama_karyawan', '$gaji_id','$alamat')";
    $this->conn->query($sql);
} 
public function tampil_karyawan(){
    $sql = "SELECT * FROM tbl_karyawan";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris[] = $obj;
    }
    if (!empty($baris)) {
        return $baris;
    }   
}
public function edit_karyawan($id){
    $sql = "SELECT * FROM tbl_karyawan WHERE id = '$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}
public function update_karyawan($id,$nama_karyawan,$gaji_id,$alamat){
    $sql = "UPDATE tbl_karyawan set nama ='$nama_karyawan', stock ='$gaji_id', harga ='$alamat' WHERE id = '$id'";
    $this->conn->query($sql);
}
public function delete_karyawan($id) 
{ 

$sql = "DELETE FROM tbl_karyawan WHERE id='$id'"; 
$this->conn->query($sql); 
} 
}
    