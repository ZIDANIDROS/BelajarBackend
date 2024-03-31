<?php

class Mobil
{
    public $nama,$merek,$kecepatanmax,$kecepatanmin,$turbo;//property

    public function __construct($nama,$merek,$kecepatanmax=0,$kecepatanmin=0,$turbo=false){
        $this->nama=$nama;
        $this->merek=$merek;
        $this->kecepatanmax=$kecepatanmax;
        $this->kecepatanmin=$kecepatanmin;
        $this->turbo=$turbo;
    }
    public function kecepatan($kecepatanmax,$kecepatanmin=0)
    {
        $this->kecepatanmax = $kecepatanmax;
        for ($kecepatanmin=0; $kecepatanmin <= $kecepatanmax; $kecepatanmin++) { 
            echo "$kecepatanmin MpH". PHP_EOL;
        }
    }   
}

class mobilSport extends Mobil
{
    public $nama,$merek,$kecepatanmax,$kecepatanmin,$turbo;//property

    public function __construct($nama,$merek,$kecepatanmax=0,$kecepatanmin=0,$turbo=false){
        $this->nama=$nama;
        $this->merek=$merek;
        $this->kecepatanmax=$kecepatanmax;
        $this->kecepatanmin=$kecepatanmin;
        $this->turbo=$turbo;
    }

    public function kecepatan($kecepatanmax=0,$kecepatanmin=0)
    {
        $this->kecepatanmax = $kecepatanmax;
        for (; $kecepatanmin <= $kecepatanmax; $kecepatanmin++) { 
            echo "$kecepatanmin MpH". PHP_EOL;
            if ($kecepatanmax == 120 && $this->turbo==true){
                echo "Turbo Menyala";
            }
        }
    }
}

$mobilzidan = new mobilSport("Galardo","lamborghini",250,turbo:true);
$mobilzidan->kecepatan($mobilzidan);
