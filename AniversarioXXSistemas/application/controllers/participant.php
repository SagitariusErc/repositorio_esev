<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Participant extends CI_Controller {

	function __construct() {
		parent:: __construct();
	}

	public function index() {

		$this->load->model('Mparticipant');

		$data['codUni_dni']=$this->input->post('dni');
		$data['participante']=$this->input->post('apepat').' '.$this->input->post('apemat').', '.$this->input->post('name')  ;
		$data['condicion']= ($this->input->post('categoryP'))?$this->input->post('categoryP'):null; 
		$data['idUniversidad']=($this->input->post('universityS'))?$this->input->post('universityS'):null; 
		$data['idEscuela']=$this->input->post('idEsc');
		$data['sexo']=$this->input->post('optionsRadios');
		$data['estado']='1';
		$data['email']=$this->input->post('email');
		$data['created']= date("Y-m-d H:i:s");

		$id=$this->Mparticipant->saveParticipant($data);

		if($data['idUniversidad'] == '7')
		{
			$dataR['idParticipant']= $id;
			$dataR['nameUn']= $this->input->post('OUniv');
			$dataR['created']= date("Y-m-d H:i:s");

			$id2 = $this->Mparticipant->saveOtherUniv($dataR);
		}

		redirect(base_url().'index.php','refresh');
	}

	public  function findCode()
	{
		$this->load->model('Mparticipant');

		$code=$this->input->post('code');
		$codeDebug = substr($code,1);
		$find=$this->Mparticipant->findAlumn($codeDebug);

		echo count($find);
	}

	public  function duplicate()
	{
		$this->load->model('Mparticipant');

		$code=$this->input->post('code');
				
		$find=$this->Mparticipant->findRegisAlum($code);
		
		echo  count($find);
		
	}


}