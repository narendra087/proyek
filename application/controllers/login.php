<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//VIEW AWAL
	public function index()
	{
		$this->load->view('user/login');
	}

	public function admin()
	{
		$this->load->view('admin/a_login');
	}


	//LOGIN ADMIN
	public function min() 
	{
		$uname = $this->input->post('uname');
		$pass = $this->input->post('pass');
		$isLogin = $this->model->login_authen_a($uname, $pass);
		if ($isLogin == true) {
			$data_session = array(
 				'nama' => $uname,
 				'status' => 'admin'
 				);
 			$this->session->set_userdata($data_session);
 			$this->homeadmin();
		}
		else{
			$data['err_message'] = "Username atau Password Salah";
			$this->load->view('admin/a_login', $data);
		}
	}

	public function homeadmin()
	{		
		$this->session->userdata('nama');
		$this->load->library('pagination');
		$data['krywn'] = $this->model->datakaryawan();
		$rows = $this->db->get('employee');

		$config['base_url'] = 'http://localhost/proyek/login/homeadmin/';
		$config['total_rows'] = $rows->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['first_tag_open'] = '';
		$config['first_tag_close'] = '';

		$config['next_tag_open'] = '';
		$config['next_tag_close'] = '';

		$config['num_tag_open'] = '';
		$config['num_tag_close'] = '';

		$config['last_tag_open'] = '';
		$config['last_tag_close'] = '';

		$config['prev_tag_close'] = '';
		$config['prev_tag_close'] = '';

		$config['cur_tag_open'] = '<a class="active">';
		$config['cur_tag_close'] = '</a>';
		
		$this->pagination->initialize($config);

		$this->load->view('header');
		$this->load->view('admin/home', $data);
		$this->load->view('footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}


	//========================================= USER =====================================

	//LOGIN USER
	public function user() 
	{
		$nmr = $this->input->post('nmr');
		$pass = $this->input->post('pass');
		$isLogin = $this->model->login_authen($nmr, $pass);
		if ($isLogin == true) {
			$data_session = array(
 				'nmr' => $nmr,
 				'status' => 'member'
 				);
 			$this->session->set_userdata($data_session);
 			$this->home();
		}
		else{
			$data['err_message'] = "Nomor Pegawai atau Password Salah";
			$this->load->view('user/login', $data);
		}
	}

	public function home()
	{
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}


	//REGISTER
	public function register()
	{
		$this->load->view('user/register');
	}

	public function register_user()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nmr' => $this->input->post('nmr'),
			'email' => $this->input->post('email'),
			'pass' => $this->input->post('pass'),
			'gbr' => 'no-picture.png'
			);
		$this->model->add($data);
		$this->index();
	}

}
