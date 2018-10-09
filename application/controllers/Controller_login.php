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
	echo'votre identifiant ou mot de passe est incorrect';
			}
		
		}
	}

	public function inscriptions()
	{
		$this->load->view('inscriptions');
		
	
			if(isset($_GET['btnInscriptions']))
			{
				$idUser=$this->input->get('idUser');
				$nom = $this->input->get('txtNom');
		$prenom = $this->input->get('txtPrenom');
		$login = $this->input->get('txtLogin');
		$motDePasse = $this->input->get('txtMdp');
		$nomPrenom=$nom.' '.$prenom;		
				if(!empty($_GET['txtNom']))
				{
					if(!empty($_GET['txtPrenom']))
					{
						if(!empty($_GET['txtLogin']))
						{
							if(!empty($_GET['txtMdp']))
							{
								$this->load->model('M_Login');
								$info['newtest'] = $this->M_Login->inscription($idUser,$nomPrenom,$login,$motDePasse);
							}
							else
							{
							echo'veuillez mettre un mot de passe';
							}	
						}
						else
						{
						echo'veuillez mettre un login';
						}	
					}	
					else
					{
					echo'veuillez mettre un prenom';
					}
				}
				else
				{		
				echo'veuillez mettre un nom';
				}
			}
		
	}
}