<?php

  include './config/koneksi.php';

  $nama               = $_POST['nama'];
  $kodematkul         = $_POST['kodematkul'];
  $deskripsi          = $_POST['deskripsi'];

  $query = "INSERT INTO matakuliah (nama,kodematkul,deskripsi) VALUES ('$nama','$kodematkul','$deskripsi')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>