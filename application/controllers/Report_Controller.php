<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_id')){return redirect('auth_Controller/loginForm');}
		$this->load->model('Report_model','rm');
	}

	public function index()
	{
		$data['data'] = $this->db->query("SELECT `tbl_tenant`.name,`tbl_tenant`.id, `tbl_rent`.`month` as `rentMonth`,`tbl_rent`.`rent`,tbl_rent.elc_bill,tbl_rent.gass_bill, `tbl_payment`.`pay` as `totalPayment`, `tbl_house`.`house` FROM `tbl_tenant` JOIN `tbl_rent` ON `tbl_rent`.`id` = `tbl_tenant`.`id` JOIN `tbl_payment` ON `tbl_payment`.`id` = `tbl_tenant`.`id` JOIN `tbl_house` ON `tbl_house`.`id` = `tbl_rent`.`house_no`")->result();
		$data['page'] = 'Report/view_allReport';
		$this->load->view('app',$data);
	}


	public function details()
	{
		$data['data'] = $this->rm->viewReport();
		$data['page'] = 'Report/view_details';
		$this->load->view('app',$data);
	}


}