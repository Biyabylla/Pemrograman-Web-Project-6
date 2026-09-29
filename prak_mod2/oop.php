<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nim = "24001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;

$mhs2 = new Mahasiswa();
$mhs2->nim = "24002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;

echo "<h2>Data Mahasiswa 1</h2>";
$mhs1->tampilkanData();

echo "<h2>Data Mahasiswa 2</h2>";
$mhs2->tampilkanData();
?>