<?php
function luas ($r){
    $luas = 3.14 * $r * $r;
    return $luas;
}
function keliling ($d){
    $keliling = 3.14 * $d;
    return $keliling;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Lingkaran</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">

    <style>
        form {
            margin-top: 50px;
        }
        .table {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: #ffe7f0">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="hasilbmi.php" style="font-family: impact; color: #cf2e69">LINGKARAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: #ff2877">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: #ff2877">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: #ff2877">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: #ff2877">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: #ff2877">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: #ff2877">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="margin-top: 30px; margin-left: 380px;">Hitung Bangun Lingkaran</h1>
            <div class="col-6">
                <form action="" method="POST">
                    <label for="rusuk" style="font-size: large;">Jari Jari (cm)</label>
                    <input style="margin-left: 50px; margin-bottom: 20px;" type="number" name="rusuk"> <br>
                    <input style="margin-left: 100px; width: 120px;" type="submit" value="HITUNG LUAS">
                </form>
                <form action="" method="POST" style="margin-top: 100px;">
                <label for="diameter" style="font-size: large;">Diameter (cm)</label>
                    <input style="margin-left: 42px; margin-bottom: 20px;" type="number" name="diameter"> <br>
                    <input style="margin-left: 100px; width: 150px;" type="submit" value="HITUNG KELILING">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jari Jari</th>
                        <th scope="col">Hasil Luas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_POST["rusuk"])){
                        $jari = $_POST ["rusuk"];
                        $urut =1;
                        $luas = luas($jari); 
                        }
                        ?>
                    <tr>
                            <th scope="row"><?php echo @$urut ?></th>
                            <td scope="row"><?php echo @$jari ?></td>
                            <td scope="row"><?php echo @$luas ?></td>
                    </tr>
                  </table>
                  <table class="table" style="margin-top: 130px;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Diameter</th>
                        <th scope="col">Hasil Keliling</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                          if(isset($_POST["diameter"])){
                          $diameter = $_POST ["diameter"];
                          $no =1;
                          $keliling = keliling($diameter);
                          }
                        ?>
                      <tr>
                        <th scope="row"><?php echo @$no ?></th>
                        <td scope="row"><?php echo @$diameter ?></td>
                        <td scope="row"><?php echo @$keliling ?></td>
                      </tr>
                  </table>
            </div>
    </div>
</div>

</body>
</html>