<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dosen  | Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php 
      include './config/koneksi.php';
      $id     = $_GET['id'];
      $query  = "SELECT * FROM dosen WHERE ID = '$id'";
      $result = mysqli_query($koneksi,$query);
      $data   = mysqli_fetch_assoc($result);
    ?>
    <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
      <h2 class="text-center fw-bold">Edit Data Dosen</h2>  
      <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
        <form action="editproses.php" method="post">
          <input type="hidden" name="id" value="<?= $data['id']?>">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama" value="<?= $data['nama']?>">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIDN</label>
            <input name="nidn" type="text" class="form-control" id="nidn" value="<?= $data['nidn']?>">
          </div>

          <div class="mb-3">
            <p>Jenjang Pendidikan</p>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="radio" name="jenjangpendidikan" id="jenjangpendidikan" value="S2" <?= $data['jenjangpendidikan'] == 'S2'? 'checked': null ?>>
            <label for="jenjangpendidikan" class="from-label">S2</label>
            <input type="radio" name="jenjangpendidikan" id="jenjangpendidikan" value="S3" <?= $data['jenjangpendidikan'] == 'S3'? 'checked': null ?>>
            <label for="jenjangpendidikan" class="from-label">S3</label>
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