<?php

class Orang{
    //property
    private string $nama;
    private string $tglLahir;
    protected string $alamat;

    //constructornya
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "object". $this->nama ."dibuat <br>";
        $this->tampilkanPassword();
    }
    
    //Destructor
    public function __destruct()
    {
        echo "object". $this->nama ."dihapus";
    }

    //method
    public function ucapkansalam(){
        echo "<h2> Halo perkenalkan nama saya ". $this->nama ."</h2>";
    }
    
    private function tampilkanPassword(){
        echo "Rahasia1234";
    }

    //Setter
    public function setNama($nama){
        $this->nama = $nama;
    }

    //getter
    public function getNama(){
        return $this->nama;
    }

    public function settglLahir($tglLahir){
        $this->tglLahir = $tglLahir;
    }

    public function gettglLahir(){
        return $this->tglLahir;
    }

    public function setalamat($alamat){
        $this->alamat = $alamat;
    }

    public function getalamat(){
        return $this->alamat;
    }
}