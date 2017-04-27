<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	# VALIDAR USUÁRIO
	function validate($username, $password){
		$this->db->where('NOMUSU', $username);
		$this->db->where('SENUSU', md5($password));
		$result = $this->db->get('TBLUSU');

		if ($result->num_rows() == 1)
			return TRUE;
	}

	function dados($username){
		$this->db->where('NOMUSU', $username);

		$result = $this->db->get('TBLUSU');
		return $result->row('PRINOM');
	}
}