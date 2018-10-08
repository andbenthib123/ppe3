<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {

	public function index()
	{			
	
		$this->load->model('M_Login');
		//$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		$this->load->view('index');
					
		}

		public function test()
		{
			$this->form_validation->set_rules('txtUser','Identifiant','required');
		$this->form_validation->set_rules('txtMdp','Mot de passe','required');
		
		if($this->form_validation->run()==false)
		{
			$login = $this->input->get('txtUser');
			$mdp = $this->input->get('txtMdp');
			$this->load->model('M_Login');
			$info['test'] = $this->M_Login->index($login,$mdp);
 			//echo var_dump($info);
			if( count($info['test'])!=0 )
			{
				
				$this->load->view('compte');
			}
			else
			{
				$this->load->view('index');
	echo'c faux';
			}
		
		}
	}
}