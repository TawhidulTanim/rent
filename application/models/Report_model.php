<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report_model extends cI_model{


	public function selectData($table,$field,$con=false,$row=false){
		$this->db->select($field);
		$q = $this->db->get($table);
		if($con)
			$this->db->where($con);

		if($row)
			$r = $q->row();
		else
			$r = $q->result();
			return $r;
	}

	public function viewReport(){
		
		$this->db->select(['tbl_tenant.*, tbl_rent.month as rentMonth,tbl_rent.rent,tbl_rent.elc_bill,tbl_rent.gass_bill, tbl_payment.pay as totalPayment,tbl_house.house']);
		$this->db->from('tbl_rent');
		$this->db->join('tbl_tenant','tbl_tenant.id = tbl_rent.t_id');
		$this->db->join('tbl_house','tbl_house.id = tbl_rent.house_no');
		$q = $this->db->get();
		$rslts = $q->result();
		return $rslts;
	}	

	
}
