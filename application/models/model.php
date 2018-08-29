<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

	//========================================== ADMIN

	public function login_authen($nmr, $pass) 
	{
		$this->db->select('*');
		$this->db->where('nmr', $nmr);
		$this->db->where('pass', $pass);
		$this->db->from('employee');

		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	public function login_authen_a($uname, $pass) 
	{
		$this->db->select('*');
		$this->db->where('uname', $uname);
		$this->db->where('pass', $pass);
		$this->db->from('admin');

		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	public function datakaryawan2() 
	{
		$data = $this->db->get('employee');
		return $data->result();
	}

	public function datakaryawan() 
	{
		$data = $this->db->get('employee', '4', $this->uri->segment(3));
		return $data->result();
	}

	public function prof($where="")
	{
		$data = $this->db->query('select * from employee '. $where);
		return $data->result_array();
	}

	public function edit_data($table,$data,$where){		
		$upd = $this->db->update($table,$data,$where);
		return $upd;
	}

	//=========================================== USER

	public function add($data) {
		$this->db->insert('employee', $data);
	}

	public function delete($table, $where) {
		$del = $this->db->delete($table, $where);
		return $del;
	}
}
