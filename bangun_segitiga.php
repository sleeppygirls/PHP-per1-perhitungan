<?php
function luas ($a,$t){
    $luas = 0.5 * $a * $t;
    return $luas;
}
function keliling ($s1,$s2,$s3){
    $keliling = $s1 + $s2 + $s3;
    return $keliling;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Segitiga</title>
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
<body style="background-image: url(images/segitiga.jpg);background-repeat: no-repeat;background-size: cover;">
    
<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: #fff5e8">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="hasilbmi.php" style="font-family: impact; color: rgb(197, 86, 26)">SEGITIGA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: rgb(255, 125, 55)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: rgb(255, 125, 55)">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: rgb(255, 125, 55)">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: rgb(255, 125, 55)">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: rgb(255, 125, 55)">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: rgb(255, 125, 55)">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="margin-top: 30px; margin-left: 380px; color: rgb(197, 86, 26); font-family: cursive;">Hitung Bangun Segitiga</h1>
            <div class="col-6">
                <form action="" method="POST">
                    <label for="alas" style="font-size: large;">Alas (cm)</label>
                    <input style="margin-left: 50px; margin-bottom: 20px;" type="number" name="alas"> <br>
                    <label for="tinggi" style="font-size: large;">Tinggi (cm)</label>
                    <input style="margin-left: 33px; margin-bottom: 20px;" type="number" name="tinggi"> <br>
                    <input style="margin-left: 100px; width: 120px;" type="submit" value="HITUNG LUAS">
                </form>
                <form action="" method="POST">
                <label for="sisi1" style="font-size: large;">Sisi 1 (cm)</label>
                    <input style="margin-left: 42px; margin-bottom: 20px;" type="number" name="sisi1"> <br>
                    <label for="sisi2" style="font-size: large;">Sisi 2 (cm)</label>
                    <input style="margin-left: 42px; margin-bottom: 20px;" type="number" name="sisi2"> <br>
                    <label for="sisi3" style="font-size: large;">Sisi 3 (cm)</label>
                    <input style="margin-left: 42px; margin-bottom: 20px;" type="number" name="sisi3"> <br>
                    <input style="margin-left: 100px; width: 150px;" type="submit" value="HITUNG KELILING">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Alas</th>
                        <th scope="col">Tinggi</th>
                        <th scope="col">Hasil Luas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_POST["alas"])){
                        $alas = $_POST ["alas"];
                        $tinggi = $_POST ["tinggi"];
                        // $sisi1 = $_POST ["sisi1"];
                        // $sisi2 = $_POST ["sisi2"];
                        // $sisi3 = $_POST ["sisi3"];
                        $urut =1;
                        $luas = luas($alas,$tinggi); 
                        // $keliling = keliling($sisi1,$sisi2,$sisi3);
                        }
                        ?>
                    <tr>
                            <th scope="row"><?php echo @$urut ?></th>
                            <td scope="row"><?php echo @$alas ?></td>
                            <td scope="row"><?php echo @$tinggi ?></td>
                            <td scope="row"><?php echo @$luas ?></td>
                    </tr>
                  </table>
                  <table class="table" style="margin-top: 130px;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sisi 1</th>
                        <th scope="col">Sisi 2</th>
                        <th scope="col">Sisi 3</th>
                        <th scope="col">Hasil Keliling</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                          if(isset($_POST["sisi1"])){
                          $sisi1 = $_POST ["sisi1"];
                          $sisi2 = $_POST ["sisi2"];
                          $sisi3 = $_POST ["sisi3"];
                          $no =1;
                          $keliling = keliling($sisi1,$sisi2,$sisi3);
                          }
                        ?>
                      <tr>
                        <th scope="row"><?php echo @$no ?></th>
                        <td scope="row"><?php echo @$sisi1 ?></td>
                        <td scope="row"><?php echo @$sisi2 ?></td>
                        <td scope="row"><?php echo @$sisi3 ?></td>
                        <td scope="row"><?php echo @$keliling ?></td>
                      </tr>
                  </table>
            </div>
    </div>
</div>

</body>
</html>