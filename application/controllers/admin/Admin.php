<?php
	/**
	* 
	*/
	class Admin extends MY_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('Admin_model');
		}

		function index(){
			
			$list = $this->Admin_model->get_list();
			
			$total = $this->Admin_model->get_total();

			$data = array('temp' => 'admin/dashboard/taikhoan',
							'total' => $total,
							'list' => $list );
			
			$this->load->view('admin/dashboard/index', $data);
		}

		//kiểm tra tên đăng nhập có bị trùng hay không
		function checkusername(){
			$ten = $this->input->post('username');
			$where = array('username' => $ten);
	
			if ($this->Admin_model->check_exists($where)) {
				# code...
			$this->form_validation->set_message('checkusername','This account already exists');
				return false;
			}else{
				return true;
			} 
		}
		// theem moi quan tri vien
		function add(){
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('security');

			// neu co du lieu post len thi kiem tra
			if($this->input->post()){
				// echo "gui du lieu";
				 // echo "<pre>";
				 // print_r($_POST);
				$this->form_validation->set_rules('username', 'Username', 'required|callback_checkusername');
				$this->form_validation->set_rules('pass', 'Password', 'required|min_length[4]');
				$this->form_validation->set_rules('re_pass', 'Re_password', 'matches[pass]');
				$this->form_validation->set_rules('ten', 'Ten', 'required');

				//nhap lieu chinh xac
				if ($this->form_validation->run()==TRUE) {
					//Thanh cong them vao csdl
					# code...
					// Cach 1
					// $data = array('username' => $_POST['username'],
					// 			  'pass' => $_POST['pass'],
					// 			  'ten' => $_POST['ten']);
					// Cach 2
					$data = array('username' => $this->input->post('username'),
								  'pass' => md5($this->input->post('pass')),
								  'ten' => $this->input->post('ten'));
					if ($this->Admin_model->create($data)) {
						# code...\
						echo '<script language="javascript">';
						echo 'alert("Thêm thành công")';
						echo '</script>';
					}else
					{
						echo '<script language="javascript">';
						echo 'alert("Thêm không thành công")';
						echo '</script>';
					}
				}
			}
			$data = array('temp' => 'admin/dashboard/add');
			$this->load->view('admin/dashboard/index', $data);
		}

		function update(){
			$id=$this->uri->segment(4);
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('security');

			// neu co du lieu post len thi kiem tra
			if($this->input->post()){
				// echo "gui du lieu";
				 // echo "<pre>";
				 // print_r($_POST);
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('pass', 'Password', 'required|min_length[4]');
				$this->form_validation->set_rules('re_pass', 'Re_password', 'matches[pass]');
				$this->form_validation->set_rules('ten', 'Ten', 'required');

				//nhap lieu chinh xac
				if ($this->form_validation->run()==TRUE) {
					//Thanh cong them vao csdl
					# code...
					// Cach 1
					// $data = array('username' => $_POST['username'],
					// 			  'pass' => $_POST['pass'],
					// 			  'ten' => $_POST['ten']);
					// Cach 2
					$data = array('username' => $this->input->post('username'),
								  'pass' => md5($this->input->post('pass')),
								  'ten' => $this->input->post('ten'));
					if ($this->Admin_model->update($id, $data)) {
						# code...\
						echo '<script language="javascript">';
						echo 'alert("Update thành công")';
						echo '</script>';
						redirect(admin_url('admin'));
					}else
					{
						echo '<script language="javascript">';
						echo 'alert("Update không thành công")';
						echo '</script>';
					}
				}
			}
			$data = array('temp' => 'admin/dashboard/update');
			$this->load->view('admin/dashboard/index', $data);
		}

		function delete(){
			
			$id=$this->uri->segment(4);
				$this->Admin_model->delete($id);
				// echo "Đã xóa click để quay "."<a href=\"javascript:history.go(-1)\">trở lại</a>";
				redirect(admin_url('admin'));
			
		}

		function logout()
		{
			if($this->session->userdata('login')){
				$this->session->unset_userdata('login');
			}
			redirect(admin_url('login'));
		}
		// function create()
		// {
		// 	# code...
			
		// 	$data = array('ten' => 'admintest',
		// 				'username' =>'admin',
		// 				'pass' =>'123456',
		// 				'ngaytao'=>'now()');

		// 	if ($this->admin_model->create($data)) {
		// 		# code...
		// 		echo "pass";
		// 	}else echo "fail";
		// }

		// function update(){
		// 	$data = array('ten' => 'gicungduoc',
		// 	 				'username'=>'gigi',
		// 	 				'pass'=>'hoilamgi');

		// 	$id=3;
		// 	if($this->admin_model->update($id,$data)){
		// 		echo "update thanh cong";
		// 	}else echo "update loi";
		// }

		// function delete(){
		// 	$id= '1';
		// 	if($this->admin_model->delete($id)){
		// 		echo "Xoa thanh cong";
		// 	}else{
		// 		echo "Xoa k thanh cong";
		// 	}
		// }

		// function get_info(){
		// 	$id = 2;
		// 	echo "<pre>";
		// 	print_r ($this->admin_model->get_info($id,'username,ten'));
		// }

		// function get_list(){
		// 	// $input['where'] = array('ten' => 'gicungduoc' );
		// 	// $input['like'] = array('ten', 'admin');
		// 	//$input['order'] = array('id', 'asc');
		// 	$input['limit'] = array('1', '2');
		// 	echo "<pre>";
		// 	print_r($this->admin_model->get_list($input));
		// }

	}
?>