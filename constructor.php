<?php

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;
    
            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit ="Lorem Ipsum dolor sit amet", $harga = 0 ) {
                        $this->judul = $judul;
                        $this->penulis = $penulis;
                        $this->penerbit = $penerbit;
                        $this->harga = $harga;
            }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit, $this->harga, $this->judul";
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer", 40000);
$produk3 = new Produk("Dragon Ball");

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";
    echo "Komik : " . $produk3->getLabel();