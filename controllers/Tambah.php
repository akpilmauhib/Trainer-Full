<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tambah extends CI_Controller
{
    public function tambahdata()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tambah');
        $this->load->view('template/footer');
    }
    // Proses Insert Database
    public function prosestambahdata()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat,
        );
        $this->M_App->simpan_data('tbl_member', $data);
        redirect('Dashboard');
    }
}
