<?php

class persegiPanjang{
    public $panjang = 20;
    public $lebar = 10;
    public $luas;
    public $keliling;
    public function luasPersegiPanjang(){
        $this->luas = $this->panjang * $this->lebar;
        echo "luas persegi panjang adalah : {$this->luas} <br>";
    }
    public function kelilingPersegiPanjang(){
        $this->keliling = $this->panjang + $this->panjang + $this->lebar + $this->lebar;
        echo "keliling persegi adalah : {$this->keliling} <br>";
        
    }

}
class persegi{
    public $sisi = 20;
    public $luas;
    public $keliling;
    public function luasPersegi(){
        $this->luas = $this->sisi * $this->sisi;
        echo "luas persegi adalah : {$this->luas} <br>";
    }
    public function kelilingPersegi(){
        $this->keliling = $this->sisi + $this->sisi + $this->sisi + $this->sisi;
        echo "keliling persegi adalah : {$this->keliling} <br>";
        
    }

}

class segiTiga{
    public $alas = 20;
    public $tinggi = 10;
    public $luas;
    public function luasSegiTiga(){
        $this->luas = 1/2 * $this->alas * $this->tinggi;
        echo "luas segi tiga adalah : {$this->luas} <br>";
    }

}

class lingkaran{
    public $phi = 3.14;
    public $jariJari = 9;
    public $luas;
    public $keliling;
    public function luasLingkaran(){
        $this->luas = $this->phi * $this->jariJari * $this->jariJari;
        echo "luas lingkaran adalah : {$this->luas} <br>";
    }
    public function kelilingLingkaran(){
        $this->keliling = 2 * $this->phi * $this->jariJari;
        echo "keliling lingkaran adalah : {$this->keliling} <br>";
        
    }

}

$persegiPanjang1 = new persegiPanjang();
$persegiPanjang1->luasPersegiPanjang();
$persegiPanjang1->kelilingPersegiPanjang();
$persegi1 = new persegi();
$persegi1->luasPersegi();
$persegi1->kelilingPersegi();
$segitiga1 = new segitiga();
$segitiga1->luasSegiTiga();
$lingkaran1 = new lingkaran();
$lingkaran1->luasLingkaran();
$lingkaran1->kelilingLingkaran();

?>