<?php

  include './config/koneksi.php';

  $nama           = $_POST['Nama'];
  $nim            = $_POST['NIM'];
  $program_studi  = $_POST['programstudi'];

  $query = "INSERT INTO mahasiswa (Nama,NIM,programstudi) VALUES ('$nama','$nim','$program_studi')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>