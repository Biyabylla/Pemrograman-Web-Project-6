<?php
class Buku {
    public $judul;
    public $penulis;
    public function cetakInfo() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis;
    }
}
$buku1 = new Buku();
$buku1->judul = "Laskar Pelangi";
$buku1->penulis = "Andrea Hirata";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modul 1 PBO</title>
</head>
<body>
    <h1>Pemrograman Berorientasi Objek</h1>
    <h2>Modul 1 - Pengenalan PBO</h2>
    <h3>Data Buku</h3>
    <?php
    $buku1->cetakInfo();
    ?>
</body>
</html>