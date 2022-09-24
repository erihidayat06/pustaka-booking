<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_latihan extends CI_Model{

    public $nilai1, $nilai2, $hasil;

    public function jumlah($n1 = null, $n2 = null)
    {
        // $this Adalah variable penambahan nilai

        $this -> nilai1 = $n1;
        $this -> nilai2 = $n2;

        $this -> hasil = $this -> nilai1 + $this -> nilai2;
        
        // return untuk menentukan hasil dan di kembalikan lagi
        return $this -> hasil;
    }


}