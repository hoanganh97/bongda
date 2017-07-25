<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('League_model');
		$this->load->model('Baiviet_model');

		$input['order'] = array('id' , 'ASC');
		$list_league = $this->League_model->get_list($input);

		$data = array('temp' => 'site/content/home',
					  'list' => $list_league);
		$this->load->view('site/index.php',$data);
	}
}
