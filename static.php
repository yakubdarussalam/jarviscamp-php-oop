<?php

class Kucing{
    public $nama;
    public static $jumlah_kucing = 0;
    public function __construct($nama){
        self::$jumlah_kucing++;
        $this->nama = $nama;

    }
    public static function getJumlahKucing(){
        echo "<br>".self::$jumlah_kucing ;
    }
}
$oyen = new Kucing("Oyen");
$kureng = new Kucing("Kucing Ireng");
Kucing::getJumlahKucing();