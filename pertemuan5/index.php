<?php
$nim1 = "Ahmad";
$nim2 = "Sodrul";
$nim3 = "Tamam";
$nim4 = "Mufarika";
$nim5 = "Arka";
?>

<h1>Daftar Mahasiswa Teknik</h1>
<?php echo ("Mahasiswa Pertama : " . $nim1) ?> <br>
<?php echo ("Mahasiswa Kedua : " . $nim2) ?> <br>
<?php echo ("Mahasiswa Ketiga : " . $nim3) ?> <br>
<?php echo ("Mahasiswa Keempat : " . $nim4) ?> <br>
<?php echo ("Mahasiswa Kelima : " . $nim5) ?> <br>

<hr>

<h1>Nama-Nama Makanan & Minuman</h1>
<?php
$minuman = array("Kopi", "Teh", "Susu");
$makanan = ["Mie", "Nasi Goreng", "Pecel Lele"];

var_dump($minuman);
echo "<br>";
print_r($minuman);
echo "<br>";
echo ($minuman[2]);
?>

<hr>

<h1>Perulangan</h1>
<?php
$nim = ["Ahmad", "Sodrul", "Tamam", "Mufarika", "Arka"];

for ($i = 0; $i < count($nim); $i++) {
    echo "Nama : " . $nim[$i] . "<br>";
}

echo "<br>";

echo "<h1>Perulangan dengan Foreach</h1>";

foreach ($nim as $noInduk) {
    echo "Nama : " . $noInduk . "<br>";
}
?>

<h1>Menambahkan Isi Array</h1>
<?php
$hobi = ["Ngoding", "Belajar", "Mengaji"];

$hobi[2] = "Main Game";

foreach ($hobi as $hob) {
    echo "Hobi Saya : " . $hob . "<br>";
}
?>

<hr>

<h1>Array Assosiatif</h1>
<?php
$matrik = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Matrik ke 2 index ke 3 adalah " . $matrik[1][2];
?>

<h1>Contoh Lain</h1>
<?php
$dosen = [
    [
        "nama" => "Sukisno",
        "mk" => "Jaringan"
    ],
    [
        "nama" => "Ade Ismail",
        "mk" => "Mobile android"
    ],
    [
        "nama" => "Taufik",
        "mk" => "data analis"
    ],
];

foreach ($dosen as $dos) {
    echo "<h3>" . $dos["nama"] . "</h3>";
    echo "<h4>" . $dos["mk"] . "<h4>";
    echo "<hr>";
}
?>