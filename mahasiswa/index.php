<?php 
  include './config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa  | CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-10 m-auto">
      <p class="h1 text-center p-5">Table Mahasiswa</p>
      <a href="create.php" class="btn btn-primary">Tambah Mahasiswa</a>
      <table class="table table-hover table-bordered border-primary mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <?php
          $query  = "SELECT * FROM mahasiswa";
          $result = mysqli_query($koneksi,$query);

          $no = 1;
          while ($data = mysqli_fetch_assoc($result)) {
        ?>

        <tbody>
          <tr>
            <td scope="row"><?= $no++ ?></td>
            <td scope="row"><?= $data['Nama'] ?></td>
            <td scope="row"><?= $data['NIM'] ?></td>
            <td scope="row"><?= $data['programstudi'] ?></td>
            <td scope="row">
              <a href="edit.php?id=<?= $data['ID']?>" class="btn btn-warning">Edit</a>
              <form class="d-inline" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $data['ID']?>">
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        </tbody>

        <?php
          }
        ?>

      </table>
    </div>
  </div>
</body>
</html>