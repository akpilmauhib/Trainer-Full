<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dompdf extends CI_Controller
{

	public function pdf()
	{

		// $this->load->library('dompdf_gen');
		$data['dashboard'] = $this->M_App->tampil_data("tbl_member", "id_member", "DESC")->result();


		$this->load->view('laporanpdf', $data);
		// $paper_size = 'A4';
		// $orientation = 'potrait';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);
		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('Laporan_Hasil_Bayi.pdf', array('Attachment' => 0));
	}
}
