<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hapus extends CI_Controller
{
    function hapusdata($id_member)
    {
        $where = array('id_member' => $id_member);
        $this->M_App->hapus_data('tbl_member', $where);
        redirect('Dashboard');
    }
}
