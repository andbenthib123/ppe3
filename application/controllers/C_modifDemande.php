
<?php

class C_modifDemande extends CI_Controller
{
//modif demande c la function pour afficher tout les renseignement(idDemande,ladescription...)   
public function modifDemande($idMaDemande)
   {
        $this->load->library('session');
      
       $this->load->model('M_modifDemande');
       $data['modifierMaDemande'] = $this->M_modifDemande->getAllModifDemande($idMaDemande);
       $dataa=(array) $data['modifierMaDemande'][0];
      $idDemande=$dataa['idDemande'];
      $this->session->set_userdata('idDemande',$idDemande);
       $this->load->view('modif_demande',$data);     
   } 

   //function enregistrerModifDemande c'est lorsque je clique sur le bouton valider(update)
   public function enregisterModifDemande()
   {

	
        $this->load->model('M_modifDemande');
        $descriDemande = $this->input->post('descri');
        $dateDemande = $this->input->post('dateDem');
       $setAllDemande['setAllDemande']= $this->M_modifDemande->setAllModifDemande($descriDemande,$dateDemande);
       $data['modifierMaDemande'] = $this->M_modifDemande->getAllModifDemande($idMaDemande);
       header('location:'.base_url().'index.php/Controller_login/utilisateur/');     
       
    }


    //function retour pour retourne a l'accueil
    function retour()
   {
      $this->load->library('session');
      $idUser=$_SESSION['idUser'];
    if(isset($_POST['btnHome']))
    {
      header('location:'.base_url().'index.php/Controller_login/utilisateur/'.$idUser);

    }
}
   }   ?>