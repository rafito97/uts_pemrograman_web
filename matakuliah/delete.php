<?php

  include './config/koneksi.php';

  $id       = $_POST['id'];

  $query    = "DELETE FROM dosen WHERE ID = $id";
  $result   = mysqli_query($koneksi,$query);

  if ($result) {
    header('location: index.php');
  } else {
    echo "Data gagal dihapus";
  }
?>