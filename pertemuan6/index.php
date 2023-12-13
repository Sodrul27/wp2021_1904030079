<?php
$nilai = 90;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
	// code...
	echo "Anda Lulus" . "<br>";
}
?>
<hr>

<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
	// code...
	echo "Anda Lulus" . "<br>";
} else {
	echo "Anda Tidak Lulus" . "<br>";
}
?>
<hr>

<?php

$nilai = 70;
$absen = 70;

if ($nilai >= 80 && $absen >= 80) :
	echo "Nilai Anda A" . "<br>";
elseif ($nilai >= 70 && $absen >= 70) :
	// code...
	echo "Nilai Anda B" . "<br>";
elseif ($nilai >= 60 && $absen >= 60) :
	// code...
	echo "Nilai Anda C" . "<br>";
elseif ($nilai >= 50 && $absen >= 50) :
	// code...
	echo "Nilai Anda D" . "<br>";
else :
	echo "Nilai Anda E" . "<br>";
endif;

?>
<hr>

<?php

$nilai = "B";

switch ($nilai) {
	case "A":
		echo "Anda lulus dengan sangat baik" . "</br>";
		break;
	case "B":
	case "C":
		echo "Anda lulus" . "<br>";
		break;
	case "D":
		echo "Anda tidak lulus" . "<br>";
		break;
	default:
		echo "Mungkin Anda Salah Jurusan" . "<br>";
}
?>
<hr>

<?php

$nilai = "D";

switch ($nilai):
	case "A":
		echo "Anda lulus dengan sangat baik" . "</br>";
		break;
	case "B":
	case "C":
		echo "Anda lulus" . "<br>";
		break;
	case "D":
		echo "Anda tidak lulus" . "<br>";
		break;
	default:
		echo "Mungkin Anda Salah Jurusan" . "<br>";
endswitch;
?>