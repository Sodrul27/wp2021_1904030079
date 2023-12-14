<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "
              <script>
              alert('data berhasil diinput..!');
              document.location.href= 'index.php'
              </script>
              ";
    } else {
        echo "
              <script>
              alert('data GAGAL diinput..!');
              document.location.href='inputdata.php'
              </script>
              ";
    }
}
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
            <h3><i class="fas fa-users"></i>Tambah Data Calon Mahasiswa</h3>
            <hr>

            <div class="card">
                <div class="card-header">
                    Tambah Data Calon Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST" class="row g-3">
                        <div class="mb-2 form-group">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" autofocus required autocomplete="off">
                        </div>
                        <div class="mb-2 form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off">
                        </div>
                        <div class="mb-2 form-group">
                            <label for="jenis_kelamin">jenis kelamin</label>
                            <select class="form-select" aria-label="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option selected>Pilih salah satu</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="agama">Agama</label>
                            <select class="form-select" aria-label="agama" id="agama" name="agama" required>
                                <option selected>Pilih salah satu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                        <div class="mb-2 form-group ">
                            <label for="sekolah_asal" class="form-label">Sekolah</label>
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" required autocomplete="off">
                        </div>
                        <div class="mb-2 form-group ">
                            <label for="foto_maba" class="form-label">Foto</label>
                            <input type="text" class="form-control" id="foto_maba" name="foto_maba" required autocomplete="off">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="tambah">Submit form</button>
                        </div>
                    </form>
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