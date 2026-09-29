<?php
class Persegi {
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
$persegi1 = new Persegi(10, 5);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modul 2 PBO</title>
</head>
<body>
    <h1>Pemrograman Berorientasi Objek</h1>
    <h2>Modul 2 - Dasar Pemrograman Berbasis Objek PHP</h2>
    <h3>Data Persegi</h3>
    <?php
    echo "Panjang: " . $persegi1->panjang . "<br>";
    echo "Lebar: " . $persegi1->lebar . "<br>";
    echo "Luas: " . $persegi1->hitungLuas() . "<br>";
    echo "Keliling: " . $persegi1->hitungKeliling();
    ?>
</body>
</html>