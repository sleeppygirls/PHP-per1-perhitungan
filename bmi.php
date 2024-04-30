<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan BMI</title>
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
    
<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: #e7f9ff">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="bmi.php" style="font-family: impact; color: #39849c">PERHITUNGAN BMI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: #17c3fc">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: #17c3fc">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: #17c3fc">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: #17c3fc">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: #17c3fc">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-4 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: #17c3fc">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <h1 style="margin-top: 30px; margin-left: 400px;">Perhitungan BMI</h1>
            <div class="col-6">
                <form action="" method="POST">
                    <label for="nama" style="font-size: large;">Nama</label>
                    <input style="margin-left: 105px; margin-bottom: 20px;" type="text" name="nama"> <br>
                    <label for="nama" style="font-size: large;">Tinggi Badan (cm)</label>
                    <input style="margin-left: 10px; margin-bottom: 20px;" type="number" name="tinggi"> <br>
                    <label for="nama" style="font-size: large;">Berat Badan (kg)</label>
                    <input style="margin-left: 23px; margin-bottom: 50px;" type="number" name="berat"> <br>
                    <input style="margin-left: 150px; width: 200px;" type="submit" value="KIRIM">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tinggi</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Hasil BMI</th>
                        <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST["nama"])){
                        $nama = $_POST["nama"];
                        $tinggi = $_POST["tinggi"] / 100;
                        $berat = $_POST["berat"];
                        $no = 1;
                        $bmi = $berat / ($tinggi * $tinggi);

                        $keterangan="";
                          if(@$bmi < 18.5)  
                            {
                              $keterangan = "Berat Badan Kurang";
                            }
                          elseif (@$bmi < 22.9) 
                            {
                              $keterangan = "Berat Badan Normal";
                            }
                          else if (@$bmi < 29.9)
                            {
                                $keterangan = "Berat Badan Berlebih";
                            }
                          else 
                          {
                                $keterangan = "Maaf Terlalu Berlebih Tidak Baik";
                          }
                    }
                        ?>
                    
                        <tr>
                            <td scope="row"><?php echo @$no ?></td>
                            <td scope="row"><?php echo @$nama ?></td>
                            <td scope="row"><?php echo @$tinggi ?></td>
                            <td scope="row"><?php echo @$berat ?></td>
                            <td scope="row"><?php echo @$bmi ?></td>
                            <td scope="row"><?php echo @$keterangan ?> </td>
                    </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>

</body>
</html>