<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Home Controller
* for transparencyhub
* @author bl4ckdu5t
* 
*/
class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */