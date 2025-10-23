<?php


$nim = "1233";
$nama = "Budi";

echo "\nNIM : " .$nim;
echo "\nNama : " .$nama;
?>

<?php
    define(constant_name:"NAMA", value:"Budi");
     define(constant_name:"NIM", value:"1233");

    echo "\nNama : " . NAMA;
     echo "\nNIM : " . NIM;
?>

<!-- Konstanta -->
 <h2>Ini materi konstanta</h2>
 <pre>
<?php
    define(constant_name:"UNIV", value:"Univ Telkom Bandung");
    echo "Selamat Datang di: " . UNIV;
?>
\</pre>

<!-- Operator -->
 <h2>Tes Operator</h2>
 <pre>
<?php
    $a = 10;
    $b = 5;

    // Penjumlahan
    $c = $a + $b;
    echo "Hasil Penjumlahan: " . $c . "\n";

    // Pengurangan
    $d = $a - $b;
    echo "Hasil Pengurangan: " . $d . "\n";

    // Perkalian
    $e = $a * $b;
    echo "Hasil Perkalian: " . $e . "\n";

    // Pembagian
    $f = $a / $b;
    echo "Hasil Pembagian: " . $f . "\n";
?> 
</pre>
<!-- Kondisi -->
    <h2>Tes Kondisi</h2>
    <pre>
<?php
    $nilai = 85;
    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } else {
        echo "Grade: D";
    }
?>
    </pre>
<!-- Perulangan -->
    <h2>Tes Perulangan</h2>
    <pre>
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Perulangan ke-" . $i . "\n";
    } 
    echo "\n";
    $i = 1;
    while ($i <= 10) {
        echo "While Perulangan ke-" . $i . "\n";
        $i++;
    }
?>
    </pre>
<!-- Array -->
    <h2>Tes Array</h2>
    <pre>
<?php
    $buah = array("Apel", "Pisang", "Mangga", "Jeruk");
    foreach ($buah as $item) {
        echo "Buah: " . $item . "\n";
    }
?>
    </pre>
<!-- Fungsi -->
    <h2>Tes Fungsi</h2>
    <pre>
<?php
    function sapa($nama) {
        return "Halo, " . $nama . "!";
    }
    echo sapa("Budi");
?>
    </pre>


 