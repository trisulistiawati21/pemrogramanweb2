<?php

require_once "orang.php";

class oranginggris extends orang{
    // override
    public function ucapsalam()
    {
     echo   "hello my name is " . $this->nama;
    }
}