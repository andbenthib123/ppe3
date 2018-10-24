
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
</html>


<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_login extends CI_Controller {
	

	public function index()
	{				
		$this->load->view('index');	
	}

		public function login()

		{
			//	

			if(!empty($_POST['txtUser']))
			{
				if(!empty($_POST['txtMdp']))
				{
	
					$login=$_POST['txtUser'];
					$mdp=$_POST['txtMdp'];
					$this->load->model('M_Login');
					$info['connexion']=$this->M_Login->index($login,$mdp);
					if( count($info['connexion'])!=0)
					{	
						$this->load->library('session');
					$info = (array) $info['connexion'][0];
					$idUser=$info['idUser'];
					$this->session->set_userdata('idUser',$idUser);
					$user=$this->session->userdata('idUser');
		
					
					 header('location:'.base_url().'index.php/Controller_login/utilisateur/'.$user);		
					}
					else
					{
						$data['compte'] = "Ton message d'erreur";
						$this->load->view('index',$data);
					}
			
				}
				else
				{
					$data['motdepasse'] = "Ton message d'erreur";
						$this->load->view('index',$data);
				}
		
			}
			else
			{
				$data['login'] = "Ton message d'erreur";
						$this->load->view('index',$data);
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
								header('location:'.base_url().'index.php/Controller_login/index');	
							}
							else
							{
								$data['mdp'] = "Ton message d'erreur";
								$this->load->view('inscriptions',$data);					
							}	
						}
						else
						{
							$data['user'] = "Ton message d'erreur";
							$this->load->view('inscriptions',$data);					
							}	
					}	
					else
					{
						$data['prenom'] = "Ton message d'erreur";
						$this->load->view('inscriptions',$data);					
					}
				}
				else
				{		
					$data['nom'] = "Ton message d'erreur";
					$this->load->view('inscriptions',$data);				
				}
			}
			if(isset($_POST['btnRetour']))
			{
				header('location:'.base_url().'index.php/Controller_login/index/');
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