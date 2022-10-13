<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
    // echo "Selamat belajar web programing 2 Dengan kelas 12.3A.35";

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('templates/footer');

    // $this->load->view('templates/aute_header');
    // $this->load->view('autentifikasi/login.php');
    // $this->load->view('templates/aute_footer');
    }

    public function penjumlahan ($n1, $n2){
        $this -> load-> model("Model_latihan");
       $data['nilai1'] = $n1;
       $data['nilai2'] = $n2;

       $data['hasil'] = $this -> Model_latihan -> jumlah($n1,$n2);

        $this->load->view('templates/header');
        $this -> load -> view('view-latihan', $data);
       

    }

}