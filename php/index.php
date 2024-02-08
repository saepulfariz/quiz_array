<?php

require_once 'array.php';


if (isset($_POST['submit'])) {
  $x = $_POST['input-x'];
  $y = $_POST['input-y'];
  $data_select = $data[$x];
  $total = $data_select['harga'] * $y;
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUIZ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mb-3">
    <div class="row mt-2">
      <div class="col">
        <h1 class="text-center">QUIZ | Saepulfariz</h1>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <img src="../soal/1.jpg" alt="">
      </div>
      <div class="col">
        <img src="../soal/2.jpg" alt="">
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Paket</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php $a = 1;
            foreach ($data as $d) : ?>
              <tr>
                <td><?= $a++; ?></td>
                <td><?= $d['paket']; ?></td>
                <td>Rp <?= number_format($d['harga']); ?> / Bulan</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="input-x" class="form-label">Input X</label>
                    <input type="number" class="form-control" id="input-x" name="input-x" value="<?= @$x; ?>" placeholder="x">
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="input-y" class="form-label">Input Y</label>
                    <input type="number" class="form-control" id="input-y" name="input-y" value="<?= @$y; ?>" placeholder="y">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col  text-center">
                  <button type="submit" name="submit" class="btn btn-primary w-50">Submit</button>
                </div>
              </div>
              <?php if (isset($_POST['submit'])) : ?>

                <div class="row mt-3">
                  <div class="col text-center">

                    <p>Anda membeli <b><?= $data_select['paket']; ?></b>, dengan waktu <b><?= $y; ?></b> bulan. <br>
                      Yang harus di bayar = <b><?= $total; ?></b></p>
                  </div>
                </div>


              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>