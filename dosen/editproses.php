<?php

  include './config/koneksi.php';

  $id                     = $_POST['id'];
  $nama                   = $_POST['nama'];
  $nidn                    = $_POST['nidn'];
  $jenjangpendidikan      = $_POST['jenjangpendidikan'];

  $query = "UPDATE dosen SET
              nama               = '$nama',
              nidn               = '$nidn',
              jenjangpendidikan  = '$jenjangpendidikan'
              WHERE id = $id";
  
  $result = mysqli_query($koneksi,$query);

  if ($result) {
    header ('location: index.php');
  } else {
    echo "data gagal diubah";
  }


?>