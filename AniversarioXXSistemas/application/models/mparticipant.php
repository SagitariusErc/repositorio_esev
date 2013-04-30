<?php

class Mparticipant extends CI_Model {

	function __construct() {
		parent:: __construct();
	}


	public function saveParticipant($data) {
		$this->db->insert('participante', $data);
		return $this->db->insert_id();

	}

	public function saveOtherUniv($data) {
		$this->db->insert('otrauniversidad', $data);
		return $this->db->insert_id();

	}


	public  function getCategory () {

		$this->db->select('*');
		$this->db->order_by('idCat');
		$query = $this->db->get('categoria');
		return $query->result();

	}

	public  function getUniversity () {

		$this->db->select('*');
		$this->db->order_by('idUni');
		$query = $this->db->get('universidad');
		return $query->result();

	}

	public  function findAlumn ($id) {

		$query= $this->db->select('*');
		$query=$this->db->from('bdalumnos');
		$query=$this->db->where('alumId',$id);
		$query=$this->db->get();

		return $query->row();

	}

	public  function findRegisAlum ($code) {

		$query= $this->db->select('*');
		$query=$this->db->from('participante');
		$query=$this->db->where('codUni_dni',$code);
		$query=$this->db->get();

		return $query->row();

	}
}