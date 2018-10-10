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
		
		if(!empty($_POST['txtUser']))
		{
		if(!empty($_POST['txtMdp']))
		{
			$login = $this->input->post('txtUser');
			$mdp = $this->input->post('txtMdp');
			$this->load->model('M_Login');
			$info['ok']=$this->M_Login->index($login,$mdp);
 			//echo var_dump($info);
			if( count($info['ok'])!=0)
			{
				
				$this->load->view('compte');
			}
			else
			{
				$this->load->view('index');
				echo'votre identifiant ou mot de passe est incorrect';
			}
		
		}
		else
		{
			echo'veillez mettre un mot de passe';
		}
	}
	else
	{
		echo'veillez mettre un login';
	}
	}

	public function inscriptions()
	{
		$this->load->view('inscriptions');
			if(isset($_POST['btnInscriptions']))
			{
				$idUser=$this->input->post('idUser');
				$nom = $this->input->post('txtNom');
				$prenom = $this->input->post('txtPrenom');
				$login = $this->input->post('txtLogin');
				$motDePasse = $this->input->post('txtMdp');
				$nomPrenom=$nom.' '.$prenom;		
				if(!empty($_POST['txtNom']))
				{
					if(!empty($_POST['txtPrenom']))
					{
						if(!empty($_POST['txtLogin']))
						{
							if(!empty($_POST['txtMdp']))
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