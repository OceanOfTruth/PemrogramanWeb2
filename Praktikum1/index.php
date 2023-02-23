<?php
// ini sebuah komentar
/* komen dulu ga sih */
# komen dulu ga sih
// po

// echo "Hello World <br>";
// echo "Helloworld <br>";
// print_r("Adam Malik <br>");
// var_dump("STT Nurul Fikri <br>");


// membuat variabel user

// $nama = "Adam malik";
// $umur = 18;
// $berat =70.2;
// $mahasiswa = true;

// echo"nama saya adalah $nama <br>";
// echo "Umur saya $umur";
// echo "berat say mencapau $berat kg";

// //membaut  varuabe sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];

// /---------------------------------/

//membuat variable konstanta
// define('PHI', 3.14);
// $jari = 10;
// $luas = PHI * $jari * PHI * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas";
// echo "<br>";
// echo "Keliling lingkaran dengan jari jari $keliling = $luas";

// ------------------------------

// 2 PHI R
$programs = ["PHP" , "HTML" , "JS" , "CSS"];
// echo $programs[0];
echo "Jumlah data variabel programs sebanyak " . count($programs);
echo "<br>";
foreach($programs as $program){
    echo "Bahasa $program <br>";
}
?>