<?php
$nim = "202457201055";
$nama = "Biya";
$prodi = "Sistem Informasi";
$semester = 5;
function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester;
}
tampilkanData($nim, $nama, $prodi, $semester);
?>