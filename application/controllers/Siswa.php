<?php

class Siswa extends CI_Controller
{
    public function index()
    {
        
            $data['judul'] = 'Data Siswa';
            $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
            $data['buku'] = $this->ModelBuku->getBuku()->result_array();
            $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/data', $data);
            $this->load->view('templates/footer');
            
    }


    public function tambah()
    {
            $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Tambah Siswa';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('siswa/tambah',$data);
            $this->load->view('templates/footer');
 
    }

    public function SimpanDataMahasiswa() {
        $this->form_validation->set_rules(
            'nama',
            'nis',
            'kelas',
            'tanggal-lahir',
            'tempat-lahir',
            'alamat',
            'required',[
            'required' => 'Semua Data harus diisi'
            ]);
        $data = array(
        'nama' => $this->input->post('nama'),
        'nis' => $this->input->post('nis'),
        'kelas' => $this->input->post('kelas'),
        'tanggal_lahir' => $this->input->post('tanggal-lahir'),
        'tempat_lahir' => $this->input->post('tempat-lahir'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis-kelamin'),
        'agama' => $this->input->post('agama'),
        );
        $this->load->model('ModelSiswa');
        $this->ModelSiswa->simpanDataSiswa($data);
        redirect('siswa');
    }

    public function edit() {
        $data['judul'] = 'Ubah Data Siswa';
        $this->load->model('ModelSiswa');
         $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();
        $where = ['id' =>  $this->uri->segment(3)];
        $data['siswa'] = $this->ModelSiswa->siswaWhere($where)->row_array();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('siswa/edit',$data);
            $this->load->view('templates/footer');
    }

    public function editDataSiswa(){
        $this->form_validation->set_rules(
            'nama',
            'nis',
            'kelas',
            'tanggal-lahir',
            'tempat-lahir',
            'alamat',
            'jenis_kelamin',
            'agama',
            'required',[
                'required' => 'Semua Data harus diisi'
            ]);
        $data = array(
        'nama' => $this->input->post('nama'),
        'nis' => $this->input->post('nis'),
        'kelas' => $this->input->post('kelas'),
        'tanggal_lahir' => $this->input->post('tanggal-lahir'),
        'tempat_lahir' => $this->input->post('tempat-lahir'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis-kelamin'),
        'agama' => $this->input->post('agama'),
        );
        $this->load->model('ModelSiswa');
        $this->ModelSiswa->editDataSiswa(['id' => $this->input->post('id')], $data);
        redirect('siswa');
    }

    public function hapus()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelSiswa->hapus($where);
        redirect('siswa');
    }

    

}