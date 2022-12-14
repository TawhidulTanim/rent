<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_id')){return redirect('auth_Controller/loginForm');}
		$this->load->model('Payment_model','pm');
	}

//view
	public function index()
	{
		$data['rslts'] = $this->pm->viewRent();
		$data['page'] = 'payment/view_payment';
		$this->load->view('app',$data);
	}


//load form
	public function addPayment()
	{
		$this->load->helper('form');
		$con = ['id','name'];
		$data['tenantNames'] = $this->pm->selectData('tbl_tenant',$con);
		$con2 = ['*'];
		$data['rents'] = $this->pm->selectData('tbl_rent',$con2);
		
		$con1 = ['id','house'];
		$data['houses'] = $this->pm->selectData('tbl_house',$con1);
		$data['page'] = 'payment/add_payment';
		$this->load->view('app', $data);
	}


	public function savepayment()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('t_id', 'Tenant Id', 'Required');
		$this->form_validation->set_rules('r_id', 'Rent Id', 'Required');
		$this->form_validation->set_rules('house_no', 'House No', 'Required');
		$this->form_validation->set_rules('month', 'Month', 'required');
		$this->form_validation->set_rules('year', 'Year ', 'required');
		$this->form_validation->set_rules('pay', 'Pay', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->addpayment();
		} else {
			$data['t_id'] = $this->input->post('t_id');
			$data['r_id'] = $this->input->post('r_id');
			$data['house_no'] = $this->input->post('house_no');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['pay'] = $this->input->post('pay');

			if ($this->pm->insertInfo('tbl_payment', $data)) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success">payment Info saved successfully!! </div>');
				redirect('payment');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger"> Sorry fail to save info!</div>');
				$this->addpayment();
			}
		}

	}

	public function editpaymentInfo($id){
		$this->load->helper('form');
		$this->load->helper('form');
		$con = ['id','name'];
		$data['tenantNames'] = $this->pm->selectData('tbl_tenant',$con);
		$con2 = ['*'];
		$data['rents'] = $this->pm->selectData('tbl_rent',$con2);
		
		$con1 = ['id','house'];
		$data['houses'] = $this->pm->selectData('tbl_house',$con1);
		$cond['id']=$id;
		$data['data']=$this->pm->selectData('tbl_payment','*',$cond,true);
		$data['page']='payment/edit_payment';
		$this->load->view('app',$data);
	}

	public function updatepaymentInfo(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('t_id', 'Tenant Id', 'Required');
		$this->form_validation->set_rules('r_id', 'Rent Id', 'Required');
		$this->form_validation->set_rules('house_no', 'House No', 'Required');
		$this->form_validation->set_rules('month', 'Month', 'required');
		$this->form_validation->set_rules('year', 'Year ', 'required');
		$this->form_validation->set_rules('pay', 'Pay', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->editpaymentInfo($this->input->post('id'));
		} else {
			$data['t_id'] = $this->input->post('t_id');
			$data['r_id'] = $this->input->post('r_id');
			$data['house_no'] = $this->input->post('house_no');
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');
			$data['pay'] = $this->input->post('pay');
			$con['id']=$this->input->post('id');
			if ($this->pm->updateInfo('tbl_payment', $data,$con)) {

				$this->session->set_flashdata('msg', '<div class="alert alert-success"> Info Updated successfully!! </div>');
				redirect('payment');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger"> Info not saved !! </div>');
				$this->editpaymentInfo($this->input->post('id'));
			}
		}

	}

	public function deletePaymentInfo($id){
		$con['id'] = $id;
		if($this->db->delete('tbl_payment',$con))
		$this->session->set_flashdata('msg', '<div class="alert alert-success"> Data has been deleted!! </div>');
			else
		$this->session->set_flashdata('msg', '<div class="alert alert-danger"> Failed to delete data!! </div>');
		redirect('payment');
	}

}

