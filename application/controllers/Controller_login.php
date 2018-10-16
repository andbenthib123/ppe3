<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_login extends CI_Controller {
	

	public function index()
	{				
	
		$this->load->view('index');
	}

		public function login()
		{	
		if(!empty($_POST['txtUser']))
		{
		if(!empty($_POST['txtMdp']))
		{
	
		
		$login=$_POST['txtUser'];
		$mdp=$_POST['txtMdp'];
		$this->load->model('M_Login');
		$info['connexion']=$this->M_Login->index($login,$mdp);
		
 			//echo var_dump($info);
		 	if( count($info['connexion'])!=0)
			{
			
			$info = (array) $info['connexion'][0];
			echo $info['idUser'];
			$idUser=$info['idUser'];
			echo $idUser;

		header('location:'.base_url().'index.php/Controller_login/utilisateur/'.$idUser);		
			}
			else
			{
				$this->load->view('index');
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
				
				$nom = $this->input->post('txtNom');
				$prenom = $this->input->post('txtPrenom');
				$login = $this->input->post('txtLogin');
				$motDePasse = $this->input->post('txtMdp');
				$photo="https://image.noelshack.com/fichiers/2018/22/4/1527779777-avatar7.jpg";
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
								$info['newtest'] = $this->M_Login->inscription($idUser,$nomPrenom,$login,$motDePasse,$photo);
								$this->load->view('index');
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


	public function utilisateur($idUser)
	{	
		$this->load->model('M_demande');
		$data['lesDemandes'] = $this->M_demande->getAllDemandes($idUser);
		$data['lesOffres'] = $this->M_demande->getAllOffre($idUser);
		$this->load->view('compte_Utilisateur',$data);
	}
}