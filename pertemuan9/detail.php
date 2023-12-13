<?php
require 'functions.php';
$id = $_GET['id'];
$camaba = query("SELECT * FROM calon_mhs WHERE id=$id");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

    <title>CRUD</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SIPEMABA || Univ kita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="text-white">
                    <?php echo date('l, d-m-y');
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- side bar -->

    <div class="row mt-5">
        <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
            <!-- menu -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Calon Mahasiswa</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="inputdata.php"><i class="fas fa-user-edit"></i> Input Camaba </a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar dosen</a>
                    <hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
                    <hr class="bg-dark">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
            <!-- konten -->
            <h3><i class="fas fa-users"></i>Detail Data Calon Mahasiswa</h3>
            <hr>

            <div class="card">
                <div class="card-header">
                    Data Calon Mahasiswa
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img src="image/image1.png" class="card-img-top" alt="..." style="max-width: 100px;">
                        </div>
                        <div class="col-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nama : </li>
                                <li class="list-group-item">Alamat : </li>
                                <li class="list-group-item">Jenis Kelamin :</li>
                                <li class="list-group-item">Agama : </li>
                                <li class="list-group-item">Asal Sekolah :</li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?= $camaba["nama"] ?></li>
                                <li class="list-group-item"><?= $camaba["alamat"] ?></li>
                                <li class="list-group-item"><?= $camaba["jenis_kelamin"] ?></li>
                                <li class="list-group-item"><?= $camaba["agama"] ?></li>
                                <li class="list-group-item"><?= $camaba["sekolah_asal"] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="detail.php?id=<?= $mhs["id"] ?>" class="btn btn-primary">Edit</a>
                        <a href="detail.php?id=<?= $mhs["id"] ?>" class="btn btn-danger">Hapus</a>
                        <a href="index.php" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>