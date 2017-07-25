<?php 
	/**
	* 
	*/
	class ChiTietTin extends MY_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('Baiviet_model');
		}

		function doctin(){
			//lay ID
			$id = intval($this->uri->rsegment(3));
			if ($id==0) {
				# code...
				redirect(base_url());
			}
			
			$input['where'] = array('id' => $id );
			$tin = $this->Baiviet_model->get_list($input);

			//Update lượt view
			foreach ($tin as $row) {
				# code...
				$view = $row->SoLanXem+1;
			}
			$data = array('SoLanXem' => $view);
			$this->Baiviet_model->update($id, $data);

			//Chuyển dữ liệu và load view
			$data = array('temp' => 'site/content/chitiettin',
					  'tin' => $tin);
			$this->load->view('site/index.php',$data);
		}
	}
?>