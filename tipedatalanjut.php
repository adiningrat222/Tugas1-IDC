<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TipeData</title>
</head>
<body>
    <h1>Belajar Tipe Data</h1>
    <?php
    echo "<br><h2>1. Tipe Data Integer </h2>";
    echo "belajar tipe data";
    echo "<br>";

    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    echo "variabel a: $a <br>";
    echo "variabel b: ($b) <br>";
    echo "variabel c: ($c) <br>";
    echo "variabel d: ($d) <br>";
    echo "variabel e: ($e) <br>";

    var_dump(value: $e);

    echo "<br><h2>2. Tipe Data Float </h2>";
    echo "<br>";

    $a = 10.2;
    $b = 5.2;
    $c = $a + 5.8;
    $d = $b + (10.3 * 5.4);
    $e = $d - $c;

    echo "bahasa indonesia: $a <br>";
    echo "matematika: ($b) <br>";
    echo "bahasa bali: ($c) <br>";
    echo "senibudaya: ($d) <br>";
    echo "rata-rata: ($e) <br>";

    var_dump(value: $e);


    echo "<br><h2>3. Function </h2>";
    echo "<br>";


    function tampilkanHelloWorld () {
        echo "Hello World";
    }

    tampilkanHelloWorld();

    //persegipanjang
    function hitungluaspersegipanjang($panjang, $lebar){
        echo "<br>";
        $luas = $panjang * $lebar;
        echo $luas;
    }

    hitungluaspersegipanjang(10, 5);
    hitungluaspersegipanjang(14, 56);
    hitungluaspersegipanjang(24, 46);
    hitungluaspersegipanjang(56, 3);
    hitungluaspersegipanjang(63, 9);
    hitungluaspersegipanjang(45, 4);
    hitungluaspersegipanjang(73, 8);


    //class
    class persegi{
        public function perhitungan ($nama, $s){
            echo "<br>";
            $rumus = $s * $s;
            echo "persegi $nama : ". $rumus;
            echo "<br>";
        }
    }

    $perhitungan = new persegi;
    $perhitungan ->perhitungan( "15", 50);

    $perhitungan = new persegi;
    $perhitungan ->perhitungan( "20", 70);
    

    ?>
</body>
</html>