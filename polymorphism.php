<?php

//class parent
class Profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umur...";
    }
}

class Guru extends Profesi {
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa SMK";
    }
}

class programmer extends Profesi {
    public function bekerja() {
        return "Membuka VS Code, mengetik kode PHP, dan meminum kopi.";
    }
}
$pakGuru = new Guru();
$anakRPL = new Programmer();
echo $pakGuru->bekerja();
echo "<br>";
echo $anakRPL->bekerja();
?>