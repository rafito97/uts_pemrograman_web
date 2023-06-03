<?php

  include './config/koneksi.php';

  $nama               = $_POST['nama'];
  $nidn               = $_POST['nidn'];
  $jenjangpendidikan  = $_POST['jenjangpendidikan'];

  $query = "INSERT INTO dosen (nama,nidn,jenjangpendidikan) VALUES ('$nama','$nidn','$jenjangpendidikan')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>