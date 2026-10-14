<?php
class Mahasiswa {
    public $nama;
    private $nilai;
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->setNama("Andi");
echo "Nama: " . $mhs1->nama . "<br>";
?>