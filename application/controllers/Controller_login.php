<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {

	public function index()
	{			
	
		$this->load->model('M_Login');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtUser','Identifiant','required');
		$this->form_validation->set_rules('txtMdp','Mot de passe','required');
		
		if($this->form_validation->run()==true)
		{
		$login = $this->input->get('txtUser');
		$mdp = $this->input->get('txtMdp');
		
        if($this->M_Login->index($login,$mdp))
		{
			$this->load->view('/compte');
		}
		else
		{
			$this->load->view('index');
echo'c faux';
		}
		}	
		else
		{
			$this->load->view('index');
		}		
					
		}
}