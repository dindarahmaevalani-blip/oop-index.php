<?php
class Buku 
{
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function tampilkanInformasi(): void
    {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br>";
    }
}

$buku1 = new Buku();
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Penulis 1";
$buku1->tahunTerbit = 2023;
$buku1->tampilkanInformasi();

echo "<br>"; 
$buku2 = new Buku();
$buku2->judul = "Dasar-Dasar Basis Data";
$buku2->penulis = "Penulis 2";
$buku2->tahunTerbit = 2022;
$buku2->tampilkanInformasi();
?>