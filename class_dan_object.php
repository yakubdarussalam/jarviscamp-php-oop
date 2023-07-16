<?php


//Access Modifier : Public
class jawir {
    public $warna;
    public $asal;

    public function berjalan(){
        echo "Jawir Berjalan ";
    }
    public function berlari (){
        echo "Jawir Berlari";
    }
}

//$rusdi =  new jawir();
//$rusdi->warna = "Hitam";
//$rusdi->asal = "Ngawi";

//$rusdi->berjalan();
echo "<br>";
//$rusdi->berlari();

//Tanda -> untuk mengakses properti yang ada di dalam class

//Access Modifier : Protected
class jawirPrivate {
    private $warna;
    private $asal;

    //Function setter dan getter untuk modifikasi properti, keuntungannya bisa dimodifikasi
    //$this itu mendeklarasikan classnya
    public function setWarna($warna){
        $this->warna = "Warna $warna";
    }
    public function getWarna(){
        echo $this->warna;
    }

    public function setAsal($asal){
        $this->asal = "Asal $asal";
    }
    public function getAsal(){
        echo $this->asal;
    }


    public function berjalan(){
        echo "Jawir Berjalan ";
    }
    public function berlari (){
        echo "Jawir Berlari";
    }
}

$rusdi =  new jawirPrivate();
$rusdi->setWarna ("Hitam");
$rusdi->setAsal ("Ngawi");

$rusdi->berjalan();
echo "<br>";
$rusdi->berlari();
echo "<br>";
$rusdi->getWarna();
echo "<br>";
$rusdi->getAsal();