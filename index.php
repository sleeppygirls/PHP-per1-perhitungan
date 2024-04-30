<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Putri's Home</title>
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

<nav class="navbar navbar-expand-lg py-0" style="padding-left: 50px; background-color: #e8ffe7">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 pe-3" href="index.php" style="font-family: impact; color: #556B2F;">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="index.php" style="font-family: cursive; color: #3CB371">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bmi.php" style="font-family: cursive; color: #3CB371">Perhitungan BMI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_segitiga.php" style="font-family: cursive; color: #3CB371">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_lingkaran.php" style="font-family: cursive; color: #3CB371">Lingkaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_persegi.php" style="font-family: cursive; color: #3CB371">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ps-5 fw-bold fs-4" aria-current="page" href="bangun_pp.php" style="font-family: cursive; color: #3CB371">Persegi Panjang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?php
    $judul = "BIODATA SAYA";
    $nama = "Risa Putri Devinda Sari";
    $kelas = "IK2";
    $jurusan = "Informatika";
    $jk = "Perempuan";
    $cita_cita = "";
    $motivasi = "Teruslah berjalan";

    echo "<h1 class='judul fw-bold'>$judul<h1>";
    echo "<p><span>Nama</span>: $nama<p>";
    echo "<p><span>Kelas</span>: $kelas<p>";
    echo "<p><span>Jurusan</span>: $jurusan<p>";
    echo "<p><span>Jenis Kelamin</span>: $jk<p>";
    echo "<p><span>Cita-Cita</span>: $cita_cita<p>";
    echo "<p><span>Motivasi</span>: $motivasi<p>";
    ?>



        <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>