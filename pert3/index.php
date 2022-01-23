<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pertemuan 3</title>
</head>
<body>
	<!-- PHP dalam html -->
	<h1>Selamat datang, <?php echo "Bambang"; ?></h1>

	<!-- tag HTML, dalam PHP -->

	<?php echo "<h2>di Pembelajaran Web Programing</h2>"; ?>
	<hr>

	<h2>tipe data integer</h2>

	<?php 

	echo "Desimal :"; var_dump(1966); echo "<br>";
	echo "Octa :"; var_dump(01234); echo "<br>";
	echo "Hexadecimal :"; var_dump(0x1a); echo "<br>";
	echo "Binary :"; var_dump(0b111111); echo "<br>";
	echo "UnderScore :"; var_dump(1_505_000); echo "<br>";

	 ?>
	 <hr>

	 <?php 

	 $namadepan = "Bambang";
	 $namablk = "Mardi";
	 $mk = "Web Programing";
	 $hobi = "Traveling";

	  ?>

	 <h4>identitas diri</h4>
	 <p>nama : <?php echo $namadepan . " " . $namablk; ?></p>
	 <p>Mata Kuliah : <?php echo $mk; ?></p>
	 <p>Hobi : <?php echo $hobi; ?></p>
</body>
</html>