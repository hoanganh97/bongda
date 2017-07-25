<?php 
	/**
	* 
	*/
	class TinTrongLoai extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Baiviet_model');
		}

		function tintheoloai(){
			//lay ID
			$id = intval($this->uri->rsegment(3));
			if ($id==0) {
				# code...
				redirect(base_url());
			}
			$input['where'] = array('idLeague' => $id );
			$input['order'] = array('id' , 'ASC' );
			$baiviet = $this->Baiviet_model->get_list($input);
			
			$data = array('temp' => 'site/content/tintrongloai',
					  'baiviet' => $baiviet);
			$this->load->view('site/index.php',$data);
		}
	}
?>