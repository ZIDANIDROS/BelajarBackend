<?php

namespace nama\harga;

class Product
{

    private string $nama;
    private int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function info()
    {
        echo "$this->nama enak karena harganya cuman $this->harga";
    }

    public function __destructor(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        echo "ini dari destruktor $this->nama enak karena harganya cuman $this->harga";
    }
}
