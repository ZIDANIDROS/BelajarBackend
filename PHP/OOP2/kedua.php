<?php

class kedua
{
    public $namaDepan,$namaBelakang;//property

    function __construct($namaDepan,$namaBelakang) {
        $this->namaDepan = $namaDepan;
        $this->namaBelakang = $namaBelakang;
    }
    //method
    public function lol(){
        echo "apakah kamu sudah makan {$this->namaDepan} {$this->namaBelakang} ?".PHP_EOL;
    }    
}

$a = new kedua("Husein", "Zidan");
echo ($a->lol());