<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar_Model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function cadastrarUsuario($first_name, $last_name, $email, $username, $password){
		$data = array(
				'PRINOM' => $first_name,
				'SEGNOM' => $last_name,
				'EMAUSU' => $email,
				'NOMUSU' => $username,
				'SENUSU' => md5($password),
				'STTUSU' => 1
				);
		return $this->db->insert('TBLUSU', $data);
	}	

	function getCidades(){
		$this->db->order_by('NOMCID', 'ASC');
        $estados = $this->db->get('TBLCID');
        return $estados;
	}

	function getEstados(){
		$this->db->order_by('NOMEST', 'ASC');
        $estados = $this->db->get('TBLEST');
        return $estados;
	}
}