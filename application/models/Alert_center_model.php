<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alert_center_model extends CI_Model{ 
	public function alerts(){
		return $this->db->select("vehicle_maintenance.*,vehicle_info.v_registration_no")
				->from("vehicle_maintenance") 
				->join("vehicle_info","vehicle_info.v_id = vehicle_maintenance.v_id","full")
				->where("vehicle_maintenance.active",1) 
				->get()
				->result(); 
	}
 
} 