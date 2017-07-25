<?php  
	/**
	* 
	*/
	class MY_Controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$controller=$this->uri->segment(1);
			
			switch ($controller) {
				case 'admin':
				{
					# code...
					$this->load->helper('admin');
					$this->_check_login();
				// xy ly du lieu khi truy cap admin
					break;
				}
				default:
				{
					# code...
					//list danh sach giai
					$this->load->model('league_model');
					$input['order'] = array('id','ASC');
					$league_list = $this->league_model->get_list($input);

					//list tin xem nhieu
					$this->load->model('baiviet_model');
					$input['order'] = array('SoLanXem','DESC');
					$input['limit'] = array('10','0');
					$tinxemnhieu = $this->baiviet_model->get_list($input);

					$this->data['league_list'] = $league_list;
					$this->data['tinxemnhieu'] = $tinxemnhieu;
				// xu ly du lieu trang ngoai
					break;
				}
			}
		}
		private function _check_login(){
			$controller = $this->uri->segment(2);
			
			$controller = strtolower($controller);
			// pre($controller);
			$login = $this->session->userdata('login');
			// neu chua dang nhap ma truy cap 1 trang khac login
			if (!$login && $controller != 'login') {
				# code...
				redirect(admin_url('login'));
			}
			// da dang nhap thi khong cho vao trang login nua
			if ($login && $controller == 'login') {
				# code...
				redirect(admin_url('admin'));
			}
		}
		function laydiem(){
			$this->load->model('team_model');
			$this->load->model('league_model');

			$number = $this->input->post('number');
			$input['where'] = array('idLeague' => $number);
			$input['order'] = array('diem','DESC');
			$list = $this->team_model->get_list($input);

			echo json_encode($list);
			exit();
			
			/*foreach ($list as $row):
				echo "<tr>";
			echo "<td>$row->Ten</td>";
			echo "<td>$row->sotran</td>";
			echo "<td>$row->diem</td>";
			echo "</tr>";
			endforeach;*/
		}

	}
	?>