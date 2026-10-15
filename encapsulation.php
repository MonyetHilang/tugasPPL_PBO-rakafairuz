<?php
class Siswa {
    // property private, tidak bisa diubah langusng dari luar class
    private $nama;
    private $nilaiPBO;
    
    public function setData($namaBaru, $nilaiBaru) {
$this ->nama = $namaBaru;
// Validas: Nilai tidak boleh lebih dari 100
if($nilaiBaru <= 100) {
$this->nilaiPBO = $nilaiBaru;
} else {
$this->nilaiPBO = 100;
}
}// Method public untuk mengambil data (Getter)

public function getInfo() {
    return "Siswa: " .$this->nama . ", Nilai PBO: " . $this->nilaiPBO;
}

}

$siswa1 = new Siswa();
// $siswa1->nilaiPBO = 150; // INI AKAN ERROR karena private!
$siswa1->setData("AsepKsrbu", 69);
echo $siswa1->getInfo();
?>