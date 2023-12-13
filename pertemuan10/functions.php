<?php
$conn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// Memanggil tabel
function query($query)
{
    global $conn;

    // Memanggil seluruh data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // Pemanggilan elemen
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama     = htmlspecialchars($data['nama']);
    $alamat   = htmlspecialchars($data['alamat']);
    $jenis_kelamin    = htmlspecialchars($data['jenis_kelamin']);
    $agama    = htmlspecialchars($data['agama']);
    $sekolah  = htmlspecialchars($data['sekolah_asal']);
    $foto     = htmlspecialchars($data['foto']);

    $query = "INSERT INTO calon_mhs 
                 VALUES
              (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah','$foto');";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM calon_mhs WHERE id= $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
