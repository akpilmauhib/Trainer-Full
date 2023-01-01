<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['dashboard'] = $this->M_App->tampil_data("tbl_member", "id_member", "DESC")->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
    function __construct()
    {
        parent::__construct();
        // Data login
        $this->session->userdata();

        if ($this->session->userdata('id') == "") {
            redirect(base_url("Login"));
        }
    }
}

/* End of file Controllername.php */
