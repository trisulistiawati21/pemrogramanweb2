<?php

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends orang{
    protected string $nim;
    protected string $prodi;
    protected nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }
   public function setProdi($prodi){
    $this->prodi = $prodi;
   }
   public function setNilai($nilai){
    $this->nilai = $nilai;
   }

    public function tampilkanData(){
        echo "nama : " . $this->nama . "<br>";
        echo "nim : " . $this->nim . "<br>";
        echo "nilai tugas : " . $this->nilai->gettugas() . "<br>";
        echo "nilai uts : " . $this->nilai->getuts() . "<br>";  
        echo "nilai uas : " . $this->nilai->getuas() . "<br>";  
    }
}