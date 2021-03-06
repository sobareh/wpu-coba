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

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump", 30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer", 40000);


    // echo "Komik : " . $produk1->getLabel();
    // echo "<br>";
    // echo "Game : " . $produk2->getLabel();
    // echo "<br><br>";
    // $infoProduk1 = new CetakInfoProduk();
    // echo $infoProduk1->cetak($produk1);

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (RP.30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony komputer (RP.30000) - 50 Jam
 