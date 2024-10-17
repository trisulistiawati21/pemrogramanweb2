<?php 

require_once "Model/DaftarBukuModel.php";

class BukuController{

  public function jalankan(){

    //menggunakan model
    $dataModel = new DaftarBukuModel();
   
    //mengirim datamodel ke bukuview dan menampilkannya 
    include "View/BukuView.php";
  }
}