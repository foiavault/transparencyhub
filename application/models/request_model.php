<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Request_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function fetch_results()
	{
		$query = $this->db->get('requests');
		return $query->result();
	}

	public function json_return(){
		$query = $this->db->query("SELECT * FROM `requests` WHERE title LIKE '%Military%' LIMIT 0, 10");
		$arr = [];
		foreach($query->result() as $suggestion){
			return json_encode($suggestion);
		}
	}

	public function add_user(){
		$data = [
		'firstname' => $this->input->post('firstname'),
		'lastname' => $this->input->post('lastname'),
		'department' => $this->input->post('department'),
		'email' => $this->input->post('email'),
		'password' => better_crypt($this->input->post('password'), 14)];
		var_dump($data); die();
		$this->db->insert('users',$data);
	}
}