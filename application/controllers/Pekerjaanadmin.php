<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaanadmin extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  
  $this->load->model('PekerjaanModel');
 }

	public function index()
	{
  $data['Allpekerjaan1'] = $this->PekerjaanModel->get_all_pekerjaan1();
  $data['Allpekerjaan2'] = $this->PekerjaanModel->get_all_pekerjaan2();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pekerjaanadmin/index.php',$data);
		$this->load->view('template_admin/footer.php');
			
	}
	public function edit($id_pekerjaan)
	{
		$data['pekerjaan1'] = $this->db->get_where('pekerjaan1', ['id_pekerjaan' => $id_pekerjaan])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pekerjaanadmin/edit_pekerjaan1.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function editpekerjaan1()
	{

		$this->db->set('nama_pekerjaan', $this->input->post('nama_pekerjaan'));
		$this->db->set('lama_kerja', $this->input->post('lama_kerja'));
		$this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
		$this->db->where('id_pekerjaan', $this->input->post('id_pekerjaan'));
		$this->db->update('pekerjaan1');

		redirect('pekerjaanadmin');
 }
	public function edit2($id_pekerjaan2)
	{
		$data['pekerjaan2'] = $this->db->get_where('pekerjaan2', ['id_pekerjaan2' => $id_pekerjaan2])->row_array();
		$this->load->view('template_admin/header.php');
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar.php');
		$this->load->view('pekerjaanadmin/edit_pekerjaan2.php', $data);
		$this->load->view('template_admin/footer.php');
	}
	public function editpekerjaan2()
	{

		$this->db->set('nama_pekerjaan', $this->input->post('nama_pekerjaan'));
		$this->db->set('lama_kerja', $this->input->post('lama_kerja'));
		$this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
		$this->db->where('id_pekerjaan2', $this->input->post('id_pekerjaan2'));
		$this->db->update('pekerjaan2');

		redirect('pekerjaanadmin');
	}
}