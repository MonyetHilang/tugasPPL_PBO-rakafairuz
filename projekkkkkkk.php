
<?php

class Rental {
    private $hargaSewaPerHari;

    public function setHargaSewaPerHari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    public function getHargaSewaPerHari() {
        return $this->hargaSewaPerHari;
    }

    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

class RentalMobil extends Rental {

    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 0.10;
        } else {
            return 0;
        }
    }
}

class RentalMotor extends Rental {


    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 0.05;
        } else {
            return 0;
        }
    }
}

$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(300000);

$lamaSewaMobil = 5;
$hargaMobil = $mobil->getHargaSewaPerHari();
$diskonMobil = $mobil->hitungDiskon($lamaSewaMobil);
$totalMobil = $hargaMobil * $lamaSewaMobil;
$totalDiskonMobil = $totalMobil * $diskonMobil;
$bayarMobil = $totalMobil - $totalDiskonMobil;

echo "RENTAL MOBIL<br>";
echo "Harga sewa per hari: Rp " . number_format($hargaMobil, 0, ',', '.') . "<br>";
echo "Lama sewa: " . $lamaSewaMobil . " hari<br>";
echo "Diskon: " . ($diskonMobil * 100) . "%<br>";
echo "Total sebelum diskon: Rp " . number_format($totalMobil, 0, ',', '.') . "<br>";
echo "Total diskon: Rp " . number_format($totalDiskonMobil, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " . number_format($bayarMobil, 0, ',', '.') . "<br><br>";

$motor = new RentalMotor();
$motor->setHargaSewaPerHari(100000);

$lamaSewaMotor = 5;
$hargaMotor = $motor->getHargaSewaPerHari();
$diskonMotor = $motor->hitungDiskon($lamaSewaMotor);
$totalMotor = $hargaMotor * $lamaSewaMotor;
$totalDiskonMotor = $totalMotor * $diskonMotor;
$bayarMotor = $totalMotor - $totalDiskonMotor;

echo "RENTAL MOTOR<br>";
echo "Harga sewa per hari: Rp " . number_format($hargaMotor, 0, ',', '.') . "<br>";
echo "Lama sewa: " . $lamaSewaMotor . " hari<br>";
echo "Diskon: " . ($diskonMotor * 100) . "%<br>";
echo "Total sebelum diskon: Rp " . number_format($totalMotor, 0, ',', '.') . "<br>";
echo "Total diskon: Rp " . number_format($totalDiskonMotor, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " . number_format($bayarMotor, 0, ',', '.') . "<br>";

?>

