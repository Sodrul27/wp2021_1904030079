<?php 

	$nim1 = "Ahmad Sodrul";
	$nim2 = "Ayu Santika";
	$nim3 = "Delvia";
	$nim4 = "Agung Maulana";
	$nim5 = "Rizal Firmansyah";
 ?>

 <h1>Daftar Mahasiswa Teknik</h1>
 <?php echo "$nim1"; ?><br>
 <?php echo "$nim2"; ?><br>
 <?php echo "$nim3"; ?><br>
 <?php echo "$nim4"; ?><br>
 <?php echo "$nim5"; ?><br>

 <hr>
 <?php 
 	// membuat array kosong
 	// cara dibaway php 5
 	$array1 = array("elemen","elemen");
 	// cara diatas php 5
 	$array2 = ["elemen","elemen"];

 	// membuat array sekaligus mengisinya
 	$minuman = array("Kopi","Teh","Jus");
 	$makanan = ["Nasi","Soto","Bubur"];


  ?>

  	<!-- Cara menampilkannya dengan vardump -->
 <?php 

 	var_dump($minuman);
 	echo "<br>";
  ?>

  	<!-- Cara menampilkan dengan print_r -->
 <?php 

 	print_r($makanan);
 	echo "<br>";
  ?>

  	<!-- Menampilkan 1 makanan saja -->
 <?php 

 	echo "$makanan[0]";
 	echo "<br>";
  ?>
<hr>

<!-- Membuat perulangan untuk mencetak data keseluruhan yang ada di array -->
<h3>Membuat perulangan untuk mencetak data keseluruhan yang ada di array</h3>
<?php 

	// menampilkan array mhs
	$nim = ["Ahmad Sodrul","Ayu Santika","Delvia","Agung Maulana","Rizal Firmansyah"];
 ?>
 <?php 

 	// menampilkan isi Array dengan perulangan for
 	for ($i=0; $i < count($nim); $i++) { 
 		// code...
 		echo $nim[$i]."<br>";;
 	}
  ?>

<hr>
<h3>Menggunakan perulangan dengan foreach</h3>
<?php 

	$books = ["Belajar Web Programing","Desain Grafis","Kursus HTML dalam 2 Jam"];

	// Menampilkan isi array dengan Foreach
	foreach ($books as $book){
		echo $book."<br>";
	}
 ?>

<hr>
<h3>Menambahkan isi Array</h3>
<?php 

	$hobi = [
			"Membaca",
			"Menulis",
			"Ngeblog"
			];

	// mengganti isi pada indeks ke-2
	$hobi[2] = "Mengaji";
	// menambahkan isi pada indeks ke-3
	$hobi[3] = "Coding";
	// menambahkan isi pada indeks terakhir
	$hobi[] = "Olahraga";

	// mencetak array dengan perulangan
	foreach ($hobi as $hobiku) {
		// code...
		echo $hobiku."<br>";
	}
 ?>

<hr>
<h3>Array Asosiatif</h3>
<?php 

	$mhs = [
			"nim" => "1904030079",
			"nama" => "Ahmad Sodrul Tamam",
			"fakultas" => "Teknik Unis",
			"jurusan" => "Teknik Informatika"
		];

	// mencetak isi array assosiatif
	echo "<h2>Data Mahasiswa</h2>";
	echo "<p>Nim :".$mhs["nim"]."</br>";
	echo "<p>Nama :".$mhs["nama"]."</br>";
	echo "<p>Fakultas :".$mhs["fakultas"]."</br>";
	echo "<p>Jurusan :".$mhs["jurusan"]."</br>";

 ?>

<hr>
<h3>Array Multi Dimensi</h3>
<?php 

	$matrik = [
				[2,3,4],
				[7,5,8],
				[4,3,8],
			];

	// cara mengakses isinya
	// output
	echo $matrik[1][0];
 ?>

<hr>
<h3>Contoh Lain dari Multi Dimensi</h3>
<?php 

	// membuat array 2 dimensi yang berisi array assosiatif
	$dosens = [
				[
				 "nama" => "Hardiyanto",
				 "mk" => "Web Programing"
				],
				[
				 "nama" => "Ade Ismail",
				 "mk" => "Mobile Android"
				],
				[
				 "nama" => "Sukisno",
				 "mk" => "Struktur Data"
				]
		];

	// menampilkan array
	foreach ($dosens as $dosen) {
		// code...
		echo "<h2>".$dosen["nama"]."</h2>";
		echo "<p>".$dosen["mk"]."</p>";
		echo "<hr>";
	}
 ?>