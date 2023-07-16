<?php

class Gunung {
    public $nama;
    public $lokasi;
    public $ketinggian;

    public function __construct($nama, $lokasi, $ketinggian){
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->ketinggian = $ketinggian;
    }
    public function tipe (){
        echo "$this->nama";
    } 


}

class Berapi extends Gunung {
    public $magma;
    public $lahar;

    public function __construct($nama, $lokasi, $ketinggian, $magma, $lahar )
    {
    parent::__construct($nama, $lokasi, $ketinggian);
    $this->magma=$magma;
    $this->lahar=$lahar;   
    }
    public function tipe(){
        echo "$this->nama berisi $this->magma dan $this->lahar";
    }
}

$ciremai = new Berapi ("ciremai", "kuningan", "2078mdpl", "magma", "lahar");
echo  $ciremai->nama;
echo "<br>";
$ciremai->tipe();