<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tenant_panel extends CI_Controller{

	Public function __construct(){
		parent::__construct();
		$this->load->model('Auth_Model','am');
	}
	Public function login(){
		$this->load->helper('form');
		if($this->session->userdata('tenant_id')){
			$data['page'] = 'tenant_dashboard';
			$this->load->view('tenant_app', $data);
	}
		$this->load->view('tenant_login');
	}


	Public function login_submit(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ($this->form_validation->run() == false) {
			$this->login();
		} else {
			$data['contact'] = $this->input->post('contact');
			$data['password'] = sha1($this->input->post('password'));
			$this->db->where($data);
			$chkAdmin = $this->db->get('tbl_tenant')->row();
			if ($chkAdmin){
				$sessionData['tenant_id'] = $chkAdmin->id;
				$sessionData['name'] = $chkAdmin->name;
				$sessionData['contact'] = $chkAdmin->contact;
				$this->session->set_userdata($sessionData);
				return redirect('tenant_panel/dashboard');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger"> Sorry!! failed to login. </div>');
					$this->login();
			}
		}
	}


	public function logout(){
		$this->session->unset_userdata('tenant_id');
		return redirect('tenant_panel/login');
	}
	
	public function dashboard()
	{
		$data['page'] = 'tenant_dashboard';
		$this->load->view('tenant_app', $data);
	}
	
	public function viewAllReport(){
		$tid=$this->session->userdata('tenant_id');
		$data['page'] = 'tenant_allReport';
		$data['data'] = $this->db->query("SELECT *, (select sum(pay) from tbl_payment where tbl_payment.r_id=tbl_rent.id) as pay FROM `tbl_rent` where t_id=$tid")->result();
		$this->load->view('tenant_app', $data);
	}
}