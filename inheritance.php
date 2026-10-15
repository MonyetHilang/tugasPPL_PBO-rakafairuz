<?php

// Class Induk (parent)
class Kendaraan
{
    public $merk;
    public function __construct($merk)
    {
        $this->merk = $merk;
    }
    public function berjalan()
    {
        return $this->merk . " sedang melaju... ";
    }
}
// Class Anak (Child) mewarisi class kendaraan
class Mobil extends Kendaraan
{
    public $jumlahPintu = 2;
    public function bukaPintu()
    {
        return " Membuka " . $this->jumlahPintu . " pintu mobil " . $this->merk;
    }
}

$mobilRPL = new Mobil("Porsche");
echo $mobilRPL->berjalan();
echo "<br>";
echo $mobilRPL->bukaPintu();

?>