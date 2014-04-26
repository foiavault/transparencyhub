<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* View Controller to view pages
* for transparencyhub
* @author bl4ckdu5t
* 
*/
class View extends CI_Controller {

	/**
	 * View method for viewing pages
	 *
	 */

	public function page($page = 'home'){
		if (!file_exists('application/views/pages/'.$page.'.php')) {
			// Shit that file doesn't exist lick my 404 fuckah
			show_404();
		}

		$this->load->view('template/header');
		$this->load->view('pages/'.$page);
		$this->load->view('template/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/view.php */