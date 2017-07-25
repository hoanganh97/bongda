<?php 
	/**
	* 
	*/
	class Login extends MY_Controller
	{
		function index()
		{
			# code...
			$this->load->library('form_validation');
			$this->load->helper('form');
			if ($this->input->post()) {
				# code...

				$this->form_validation->set_rules('login', 'Login', 'callback_checklogin');
				if($this->form_validation->run()){
					$this->session->set_userdata('login', true);
					redirect(admin_url('admin'));
				}
			}
			$this->load->view('admin/login/login');
		}

		// Kiem tra user va pass
		function checklogin(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$this->load->model('Admin_model');
			$data = array('username' => $username, 'pass' => $password);
		
			if ($this->Admin_model->check_exists($data)) {
				# code...
				return true;
			} else {
				$this->form_validation->set_message(__FUNCTION__,'Không thành công');
				return false;
			}
		}
	}
?>