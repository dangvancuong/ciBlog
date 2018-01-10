<?php 
	/**
	* 
	*/
	class Pages extends CI_Controller
	{ 
		// public function index($value = 'home'){
		// 	echo $value;
		// }
		public function view($page='home')
		{ 
			// var_dump(file_exists(APPPATH.'views/pages');
			
			// die(APPPATH.'views/pages'.$page.'.php');
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) { 
				show_404(); 
			} 
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');
		}
	}
 ?>