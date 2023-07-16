<?php

//Perbedaannya jika menggunakan constructor bisa langsung di masukan parameternya saat membuat object
//Lebih prefer menggunakan constructor
//Jika menggunakan private, kita tidak bisa akses langsung ke properti
//Jika ingin mengakses ke properti maka harus pakai setter dan getter
class Ikan {
    public $nama;
    public $warna;
    public $jenis;

    public function __construct($nama, $warna, $jenis){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis; 
    }

    public function bernafas(){
        return "Ikan $this->nama Berjenis $this->jenis Berwarna $this->warna Bernafas dengan Insang Cuy";
    }
}


$tongkol = new Ikan("Tongkol", "Hitam","Ikan Laut");
echo $tongkol->bernafas();
