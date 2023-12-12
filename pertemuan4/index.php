<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pertemuan 4</title>
</head>
<body>

	<h1>Membuat Array</h1>
	<?php 

		$values = array(1,2,3,4,5.60);
		var_dump($values);
		echo "<br>";
		echo($values[4]);

		echo "<br>";

		$prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
		var_dump($prodi);
		echo "<br>";
		echo "$prodi[3]";

		echo "<br>";
		// mengganti isi value
		$prodi[0] = "T.Nuklir";
		echo "<br>";
		var_dump($prodi);
		echo "<br>";

		// menambahkan value
		$prodi[] = "T.Komputer";
		var_dump($prodi);
	 ?>
	 <hr>

	 <h1>Map dengan Array</h1>
	 <?php 

	 	$ahmad = array(
	 				"id" => "omdul",
	 				"nama" => "ahmad abdul",
	 				"umur" => 24,
	 			);
	 	var_dump($ahmad);
	 	echo "<br>";
	 	$sodrul = [
	 				"id" => "omdrul",
	 				"nama" => "Sodrul",
	 				"umur" => 25,
	 				"alamat" => [
	 					"kota" => "Tangerang",
	 					"Prov" => "Banten"
	 				]
	 			];
	 	var_dump($sodrul);
	 	// echo "<br>";
	 	// echo("nama id :" . $sodrul["id"]);
	 	// echo "<br>";
	 	// echo("nama lengkap :" . $sodrul["nama"]);
	 	// echo "<br>";
	 	// echo("umur :" . $sodrul["umur"]);
	  ?>

	 <hr>
	 <h1>Operator MAtematika</h1>

	 <?php 

	 	$tambah = 10 + 10;
	 	$kurang = 100 - 10;
	 	$kali = 5 * 5;
	 	$bagi = 50 / 10;
	 	$modular = 100 % 3;
	 	$pangkat = 4**3;

	 	echo "Tambah :" . $tambah . "<br>";
	 	echo "Kurang :" . $kurang . "<br>";
	 	echo "Kali :" . $kali . "<br>";
	 	echo "Bagi :" . $bagi . "<br>";
	 	echo "Modular :" . $modular . "<br>";
	 	echo "Pangkat :" . $pangkat . "<br>";

	  ?>
	<hr>
	<h2>Increment</h2>
	<?php 

		$a = 10;
		$a++;
		// $a = $a +a;
		$a++;
		$a--;

		echo($a);
	 ?>
</body>
</html>