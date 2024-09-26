<?php
class orang{
    protected $nama;

    //constructor
    public function __construct($nama)
    {
        $this->nama =$nama;
    }

    //method
    public function ucapsalam (){
        echo "halo nama saya" . $this->nama;
    }
}