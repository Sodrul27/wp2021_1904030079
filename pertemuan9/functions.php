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
