<?php 
	/**
	* 
	*/
	class Team extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Team_model');
		}
		// lay ra danh sach
		function index(){
			
			$total = $this->Team_model->get_total();
			
			//load ra thu vien phan trang
			$this->load->library('pagination');
			$config = array('total_rows' => $total, //tong tat ca cac san pham tren website
							'base_url' => admin_url('team/index'), //link hien thi ra danh sach san pham
							'per_page' => 10,//so luong san pham hien thi tren 1 trang
							'uri_segment' => 4 //phân đoạn để lấy ra id dữ liệu
							);
			//khởi tạo cấu hình phân trang 
			$this->pagination->initialize($config);

			$segment = $this->uri->segment(4);
			$segment = intval($segment);

			$input = array();
			$input['limit'] = array($config['per_page'], $segment);

			$list = $this->Team_model->get_list($input);
			

			//lay du lieu do ra option select
			$this->load->model('League_model');
			$select = $this->League_model->get_list();

			//lấy dữ liệu từ thanh địa chỉ
			$id = $this->input->get('id');
			$id = intval($id);

			$name = $this->input->get('name');

			$league = $this->input->get('league');

			//đưa dữ liệu thành điều kiện
			$input['where'] = array();
			if($id>0){
				$input['where']['id'] = $id;
			}

			if(strlen($name)>0){
				$input['like'] = array('Ten' , $name );
			}
			
			if($league>0){
				$input['where']['idLeague'] = $league;
			}

			$list = $this->Team_model->get_list($input);

			//lay du lieu
			$data = array('temp' => 'admin/dashboard/doibong', 
							'list' => $list,
							'total' => $total,
							'select' => $select,
							'list' => $list);

			//kiểm tra có lọc hay không
			

			$name = $this->input->get('name');
			$league = $this->input->get('league');
			//load view
			$this->load->view('admin/dashboard/index', $data);
		}

		function add(){
			echo "add";
		}
	}
?>