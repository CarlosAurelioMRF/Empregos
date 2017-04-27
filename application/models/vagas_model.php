<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vagas_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function listarVagas(){
		$result = $this->db->get('TBLVAG');
		return $result;
	}

	function delete($codigo){
		$this->db->where('CODVAG',$codigo);
		$this->db->delete('tblvag');

		if ($this->db->affected_rows()) {
			return TRUE;
		}
	}

	function adicionarVaga($vaga, $quantidade){
		$data = array(
			'NOMVAG' => $vaga,
			'DISVAG' => $quantidade,
			'STTVAG' => 1
			);
		return $this->db->insert('TBLVAG', $data);
	}

	function dadosUpdate($codigo){
		$this->db->where('CODVAG', $codigo);
		$query = $this->db->get('TBLVAG');
		return $query; 
	}

	function updateVaga($codigo, $dados){
		$this->db->where('CODVAG', $codigo);
		$this->db->update('TBLVAG', $dados);

		if ($this->db->affected_rows())
			return TRUE;

	}
}