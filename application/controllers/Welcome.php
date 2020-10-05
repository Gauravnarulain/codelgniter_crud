<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct() { 
		parent::__construct(); 
		$this->load->model('welcome_model');

	}
	public function index()
	{
		
		$data=array();
		$data['post'] = $this->welcome_model->fetch();
		$this->load->view('welcome_message',$data);
	}
	public function add()
	{

		
		$btnSave = $this->input->post('btnsave');
		if (isset($btnSave)) {

			$postField = $this->input->post();
			unset($postField['btnsave']); 
			
			$response = $this->welcome_model->add($postField);
			if($response){
				redirect('/');
			}else{
				redirect('/');
			}
		}
	}
	public function delete($id = 0){
	
		$response = $this->welcome_model->delete($id);
		if($response){
			redirect('/');
		}
				
	}
	public function update($id = 0){
		$data = array();
		$postField = array();
		

		$btnsave = $this->input->post('btnsave');
		if(isset($btnsave)){

			$postField=$this->input->post();
			unset($postField['btnsave']);  // remove form the array
			$response=$this->welcome_model->update($postField,$id);
			if($response){
				redirect('/');
			}else{
				die('Error, while processing your request!!!');
			}

		}

		$data['post'] = $this->welcome_model->fetchById($id);
		$this->load->view('post_update_view',$data);
	}
}
