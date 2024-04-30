<?php 
    include 'bangun/persegi_panjang.php'
?>

<!-- <?php
function luas ($p,$l){
    $luas = $p * $l;
    return $luas;
}
function keliling ($p, $l){
    $keliling = 2 * ($p + $l);
    return $keliling;
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Persegi Panjang</title>
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
    
<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: rgb(255, 250, 223)">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="hasilbmi.php" style="font-family: impact; color: #cfb72e">PERSEGI PANJANG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: #ffd900">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: #ffd900">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: #ffd900">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: #ffd900">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: #ffd900">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: #ffd900">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="margin-top: 30px; margin-left: 280px; margin-bottom: 70px;">Hitung Bangun Persegi Panjang</h1>
            <div class="col-6">
                <form action="" method="POST">
                    <label for="panjang" style="font-size: large;">Panjang (cm)</label>
                    <input style="margin-left: 30px; margin-bottom: 20px;" type="number" name="panjang"> <br>
                    <label for="lebar" style="font-size: large;">Lebar (cm)</label>
                    <input style="margin-left: 50px; margin-bottom: 20px;" type="number" name="lebar"> <br>
                    <input style="margin-left: 1px; width: 120px;" type="submit" value="HITUNG LUAS" name="luas" id="luas">
                    <input style="margin-left: 30px; width: 150px;" type="submit" value="HITUNG KELILING" name="keliling" id="keliling">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Panjang</th>
                        <th scope="col">Lebar</th>
                        <th scope="col">Hasil Luas</th>
                        <th scope="col">Hasil Keliling</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_POST["luas"])){
                        $panjang = $_POST ["panjang"];
                        $lebar = $_POST ["lebar"];
                        $urut =1;
                        $luas = luas($panjang,$lebar); 
                        
                        }
                        ?>
                        <?php 
                        if(isset($_POST["keliling"])){
                        $panjang = $_POST ["panjang"];
                        $lebar = $_POST ["lebar"];
                        $urut =1;
                        $keliling = keliling($panjang,$lebar);
                        }
                        ?>
                    <tr>
                            <th scope="row"><?php echo @$urut ?></th>
                            <td scope="row"><?php echo @$panjang ?></td>
                            <td scope="row"><?php echo @$lebar ?></td>
                            <td scope="row"><?php echo @$luas ?></td>
                            <td scope="row"><?php echo @$keliling ?></td>
                    </tr>
                  </table>
            </div>
    </div>
</div>

</body>
</html>