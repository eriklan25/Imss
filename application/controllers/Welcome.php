<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['resultado'] = $this->Convenios->get_entries();
		$this->load->view('includes/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('includes/footer');
	}

	public function test(){
		echo base_url();
	}

	public function get_results(){
		$resultado = $this->Convenios->get_entries();
		print_r($resultado);
	}

	public function insert_entry(){
		$this->Convenios->insert_entry($_POST);
		redirect(base_url());
	}

	public function Create(){
		$this->load->view('includes/header');
		$this->load->view('create');
		$this->load->view('includes/footer');
	}

	public function eliminar(){
		if($_POST['id']){
			$this->Convenios->delete($_POST['id']);
		}
	}
}
