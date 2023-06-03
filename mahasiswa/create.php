<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa  | Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php 
      include './config/koneksi.php';
    ?>
    <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
      <h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>  
      <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
        <form action="createproses.php" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input name="Nama" type="text" class="form-control" id="Nama">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIM</label>
            <input name="NIM" type="text" class="form-control" id="NIM">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
            <input name="programstudi" type="text" class="form-control" id="programstudi">
          </div>

          <div class="col-3 m-auto">
            <button class="btn btn-md btn-primary px-5  mt-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>