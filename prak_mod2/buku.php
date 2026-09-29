<?php
class Buku
{
   public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}
$buku1 = new Buku();
$buku1->kode = "A001";
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Soetomo";
$buku1->tahun = 2024;

$buku1->tampilkanData();
?>