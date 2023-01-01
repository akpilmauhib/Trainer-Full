<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Controller
{

    function editdata($id_member)
    {
        $where = array('id_member' => $id_member);
        $data['tbl_member'] = $this->M_App->edit_data('tbl_member', $where)->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }
    function prosesubahdata()
    {
        $id_member = $this->input->post('id_member');
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
        $where = array('id_member' => $id_member);
        $this->M_App->proses_update($where, $data, 'tbl_member');
        redirect('Dashboard');
    }
}

/* End of file Controllername.php */
