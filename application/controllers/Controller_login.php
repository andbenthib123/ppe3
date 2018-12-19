
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
					$nomUser=$info['nomUser'];
					$photoUser=$info['photoUser'];
					$this->session->set_userdata('idUser',$idUser);
					$user=$this->session->userdata('idUser');
					$this->session->set_userdata('nomUser',$nomUser);
					$nom=$this->session->userdata('nomUser');
					$this->session->set_userdata('photoUser',$photoUser);
					$photo=$this->session->userdata('photoUser');
				
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
								$this->load->library('session');

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
			$this->load->view('inscriptions');		
			if(isset($_POST['btnRetour']))
			{
				header('location:'.base_url().'index.php/Controller_login/index/');
			}
		
	}

public function deconnexion()
{
	$this->load->library("session");
	$this->session->unset_userdata('idUser');
	$this->session->sess_destroy();
    $this->load->view("index");	
}			

	public function utilisateur()
	{	
		
		$this->load->model('M_demande');
		$this->load->library('session');
		$data['serviceUser2'] = $this->M_demande->getAllDealService();
		$dataa['service2']=(array) $data['serviceUser2'][0];
		$data['lesDemandes'] = $this->M_demande->getAllDemandes();
		$data['lesOffres'] = $this->M_demande->getAllOffre();
		$data['lesDeals'] = $this->M_demande->getAllDeals();
		$this->load->view('compte_Utilisateur',$data);
	}
}