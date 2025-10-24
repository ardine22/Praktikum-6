<?php
// ======================================
// VARIABEL
// ======================================
$nim = "1233";       // Menyimpan data NIM
$nama = "Budi";      // Menyimpan data Nama

echo "<h2>Variabel</h2>";
echo "NIM : " .$nim . "<br>";     // Menampilkan nilai variabel $nim
echo "Nama : " .$nama . "<br><br>"; // Menampilkan nilai variabel $nama


// ======================================
// KONSTANTA
// ======================================
// define() digunakan untuk membuat konstanta (nilai tetap)
define(constant_name:"NAMA", value:"Budi");
define(constant_name:"NIM", value:"1233");
define(constant_name:"UNIV", value:"Univ Telkom Bandung");

echo "<h2>Konstanta</h2>";
echo "Nama : " . NAMA . "<br>";     // Menampilkan konstanta NAMA
echo "NIM : " . NIM . "<br>";       // Menampilkan konstanta NIM
echo "Selamat Datang di: " . UNIV . "<br><br>"; // Menampilkan konstanta UNIV


// ======================================
// OPERATOR
// ======================================
$a = 10;    // Nilai pertama
$b = 5;     // Nilai kedua

echo "<h2>Operator</h2>";
$c = $a + $b;    // Penjumlahan
echo "Hasil Penjumlahan: " . $c . "<br>";

$d = $a - $b;    // Pengurangan
echo "Hasil Pengurangan: " . $d . "<br>";

$e = $a * $b;    // Perkalian
echo "Hasil Perkalian: " . $e . "<br>";

$f = $a / $b;    // Pembagian
echo "Hasil Pembagian: " . $f . "<br><br>";


// ======================================
// KONDISI (IF - ELSEIF - ELSE)
// ======================================
$nilai = 85; // Nilai yang akan dicek

echo "<h2>Kondisi</h2>";
if ($nilai >= 90) {
    echo "Grade: A<br>";
} elseif ($nilai >= 80) {
    echo "Grade: B<br>";
} elseif ($nilai >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: D<br>";
}
echo "<br>";


// ======================================
// PERULANGAN (FOR dan WHILE)
// ======================================
echo "<h2>Perulangan</h2>";

// Perulangan menggunakan for
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-" . $i . "<br>";
}

echo "<br>";

// Perulangan menggunakan while
$i = 1;
while ($i <= 10) {
    echo "While Perulangan ke-" . $i . "<br>";
    $i++;
}
echo "<br>";


// ======================================
// ARRAY
// ======================================
echo "<h2>Array</h2>";
$buah = array("Apel", "Pisang", "Mangga", "Jeruk"); // Membuat array buah

// Menampilkan semua isi array dengan foreach
foreach ($buah as $item) {
    echo "Buah: " . $item . "<br>";
}
echo "<br>";


// ======================================
// FUNGSI
// ======================================

// Membuat fungsi dengan parameter $nama
function sapa($nama) {
    return "Halo, " . $nama . "!"; // Mengembalikan teks sapaan
}

echo "<h2>Fungsi</h2>";
echo sapa("Budi"); // Memanggil fungsi sapa()
echo "<br><br>";


?>
