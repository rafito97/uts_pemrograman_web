<?php
  include './config/koneksi.php';

  $id                     = $_POST['id'];
  $nama                   = $_POST['nama'];
  $kodematkul             = $_POST['kodematkul'];
  $deskripsi              = $_POST['deskripsi'];

  $query = "UPDATE matakuliah SET
              nama               = '$nama',
              kodematkul         = '$kodematkul',
              deskripsi          = '$deskripsi'
              WHERE id = $id";
  
  $result = mysqli_query($koneksi,$query);

  if ($result) {
    header ('location: index.php');
  } else {
    echo "data gagal diubah";
  }


?>