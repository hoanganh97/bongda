<?php 
	/**
	* 
	*/
	class Baiviet extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Baiviet_model');
		}

		function index(){
			$total = $this->Baiviet_model->get_total();
			$list = $this->Baiviet_model->get_list();

			$data = array('temp' => 'admin/dashboard/baiviet',
						  'total' => $total,
						  'list' => $list);
			$this->load->view('admin/dashboard/index', $data);
		}
	}
?>