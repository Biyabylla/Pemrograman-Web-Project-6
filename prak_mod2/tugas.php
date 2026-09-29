<?php
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
        echo "Status : " . $this->status . "<br>";
    }
    public function statusKendaraan()
    {
        return $this->status;
    }
}
class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;
    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }
    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->statusKendaraan() == "Tersedia") {
            $kendaraan->status = "Disewa";
            echo $this->nama . " berhasil menyewa " . $kendaraan->merk . ".<br>";
        } else {
            echo $this->nama . " gagal menyewa. " . $kendaraan->merk . " sedang tidak tersedia.<br>";
        }
    }
}
$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Toyota Avanza";
$kendaraan1->jenis = "Mobil";
$kendaraan1->status = "Tersedia";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "K002";
$kendaraan2->merk = "Honda Beat";
$kendaraan2->jenis = "Motor";
$kendaraan2->status = "Disewa";

$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Nabila";
$pelanggan1->alamat = "Nganjuk";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Adi";
$pelanggan2->alamat = "Mojosari";

echo "<h2>Data Kendaraan 1</h2>";
$kendaraan1->tampilkanData();

echo "<h2>Data Kendaraan 2</h2>";
$kendaraan2->tampilkanData();

echo "<h2>Data Pelanggan 1</h2>";
$pelanggan1->tampilkanData();

echo "<h2>Data Pelanggan 2</h2>";
$pelanggan2->tampilkanData();

echo "<h2>Status Kendaraan Sebelum Transaksi</h2>";
echo $kendaraan1->merk . " : " . $kendaraan1->statusKendaraan() . "<br>";
echo $kendaraan2->merk . " : " . $kendaraan2->statusKendaraan() . "<br>";

echo "<h2>Transaksi Rental</h2>";
$pelanggan1->sewaKendaraan($kendaraan1); 
$pelanggan2->sewaKendaraan($kendaraan2); 

echo "<h2>Status Kendaraan Setelah Transaksi</h2>";
echo $kendaraan1->merk . " : " . $kendaraan1->statusKendaraan() . "<br>";
echo $kendaraan2->merk . " : " . $kendaraan2->statusKendaraan() . "<br>";
?>