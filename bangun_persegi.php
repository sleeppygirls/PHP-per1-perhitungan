<?php
function luas ($s){
    $luas = $s * $s;
    return $luas;
}
function keliling ($s){
    $keliling = 4 * $s;
    return $keliling;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Persegi</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    <style>
        .judul {
            text-align: center;
            font-family: comic sans ms;
            margin-top: 30px;
            margin-bottom: 50px;
            color: rgb(211, 92, 151);
        }

        p {
            font-family: cursive;
            margin-left: 350px;
            font-size: 25px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        span {
            width: 180px;
            display: inline-block;
        }
    
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: rgb(250, 211, 255)">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="hasilbmi.php" style="font-family: impact; color: rgb(170, 82, 170)">PERSEGI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: rgb(227, 15, 255)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: rgb(227, 15, 255)">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: rgb(227, 15, 255)">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: rgb(227, 15, 255)">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: rgb(227, 15, 255)">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: rgb(227, 15, 255)">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="margin-top: 30px; margin-left: 380px; margin-bottom: 100px;">Hitung Bangun Persegi</h1>
            <div class="col-6">
                <form action="" method="POST">
                    <label for="sisi" style="font-size: large;">Sisi (cm)</label>
                    <input style="margin-left: 50px; margin-bottom: 20px;" type="number" name="sisi"> <br>
                    <input style="margin-left: 1px; width: 120px;" type="submit" value="HITUNG LUAS" name="luas" id="luas">
                    <input style="margin-left: 30px; width: 150px;" type="submit" value="HITUNG KELILING" name="keliling" id="keliling">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sisi</th>
                        <th scope="col">Hasil Luas</th>
                        <th scope="col">Hasil Keliling</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_POST["luas"])){
                        $sisi = $_POST ["sisi"];
                        $urut =1;
                        $luas = luas($sisi); 
                        }
                        ?>
                        <?php 
                        if(isset($_POST["keliling"])){
                        $sisi = $_POST ["sisi"];
                        $urut =1;
                        $keliling = keliling($sisi);
                        }
                        ?>
                    <tr>
                            <th scope="row"><?php echo @$urut ?></th>
                            <td scope="row"><?php echo @$sisi ?></td>
                            <td scope="row"><?php echo @$luas ?></td>
                            <td scope="row"><?php echo @$keliling ?></td>
                    </tr>
                  </table>
            </div>
        </div>
</div>

</body>
</html>