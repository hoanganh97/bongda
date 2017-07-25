<?php 
	/**
	* 
	*/
	class League extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('League_model');
		}
		// lay ra danh sach
		function index(){
			$list = $this->League_model->get_list();
			$total = $this->League_model->get_total();
			
			$data = array('temp' => 'admin/dashboard/giaidau', 
							'list' => $list,
							'total' => $total);

			$this->load->view('admin/dashboard/index', $data);
		}

		function add(){
			echo "add";
		}
	}
?>