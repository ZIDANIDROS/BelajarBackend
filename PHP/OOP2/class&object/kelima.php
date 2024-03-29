<?php

class Buku
{
    public $judul,$author;//property

    public function __construct($judul,$author) {
        $this->judul = $judul;
        $this->author = $author;
    }
    //method pengembalian
    public function lol(){
        echo "ini judul buku {$this->judul} ,ini author {$this->author} ?".PHP_EOL;
    }
}

class Cetak
{
    public function cetak($a){
        echo "ini judul buku {$a->judul} ,authornya adalah {$a->author} ".PHP_EOL;
    }    
}

$buku1 = new Buku("lelpali","Zidan");

$infoProduk1 = new Cetak();
$infoProduk1->cetak($buku1);

