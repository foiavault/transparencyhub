<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Page Controller to show pages
* for transparencyhub
* @author bl4ckdu5t
* 
*/
class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('request_model','request');
	}
	/**
	 * View method for viewing pages
	 *
	 */

	public function view($page = 'home'){
		if (!file_exists('application/views/pages/'.$page.'.php')) {
			// Shit that file doesn't exist lick my 404 fuckah
			show_404();
		}
		$data['requests'] = $this->request->fetch_results();
		$data['json_list'] = $this->request->json_return();
		$this->load->view('template/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer', $data);
	}

	public function register(){
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('department','Department','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('vpassword','Verify password','required|matches[password]');
		if ($this->form_validation->run()) {
			
			$this->request->add_user();
		}else{

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/page.php */