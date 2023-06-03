<?php

  include './config/koneksi.php';

  $id               = $_POST['id'];
  $nama             = $_POST['Nama'];
  $nim              = $_POST['NIM'];
  $programstudi     = $_POST['programstudi'];

  $query = "UPDATE mahasiswa SET
              Nama          = '$nama',
              NIM           = '$nim',
              programstudi  = '$programstudi'
              WHERE ID = $id";
  
  $result = mysqli_query($koneksi,$query);

  if ($result) {
    header ('location: index.php');
  } else {
    echo "data gagal diubah";
  }


?>