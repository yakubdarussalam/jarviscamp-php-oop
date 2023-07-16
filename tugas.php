<?php

class Kendaraan {

    public $merk;
    public $warna;

    public function __construct($merk, $warna)
    {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function Kendaraan (){
        echo "$this->merk berwarna $this->warna";
    }
}

class Motor extends Kendaraan {
    public $tipe;
    public $kecepatan;

    public function __construct($merk, $warna, $tipe, $kecepatan)
    {
    parent::__construct($merk, $warna, $tipe, $kecepatan);
    $this->tipe=$tipe;
    $this->kecepatan=$kecepatan;
    }
    public function getMotor (){
        echo "Motor $this->merk berwarna $this->warna dengan tipe $this->tipe memiliki kecepatan $this->kecepatan cc";
    }
}

$astrea = new Motor ("astrea","hitam","motor bebek", 97);
echo $astrea->Kendaraan();
echo "<br>";
echo $astrea->getMotor();