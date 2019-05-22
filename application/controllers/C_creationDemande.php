<?php
class C_creationDemande extends CI_Controller
{
  function index()
  {
    $this->load->library('session');
    $this->load->model('M_creationDemande');
    
    $afficherIdDemande['idDemande']=$this->M_creationDemande->afficherIdDemande();
    $afficherIdDemande = (array) $afficherIdDemande['idDemande'][0];
    $idDemandeProchain=$afficherIdDemande['idDemande'];
    $this->session->set_userdata('idDemande',$idDemandeProchain);

    $service['service']=$this->M_creationDemande->afficherlesservices();
    $this->load->view('creationDemande', $service,$afficherIdDemande);    
  }

    
  function insererFormulaire()
    {
      $this->load->model('M_creationDemande');
      $this->load->library('session');
      $descriptionDemande=$_GET['txtDescriptions'];
      $idservice=$_GET['txtSelect'];
      if(!empty($_GET['txtDescriptions']))
      {
        if($_GET['txtSelect']==null)
          { 
           
            $data['service']=$this->M_creationDemande->afficherlesservices();       
            $data['select'] = "Ton message d'erreur";
            $this->load->view('creationOffre',$data);	
      
          }
           else
          {
          $service['service']=$this->M_creationDemande->afficherlesservices();
          $choisirservice['nomservice']=$this->M_creationDemande->M_insererDemande($descriptionDemande,$idservice);      
        
          header('location:'.base_url().'index.php/Controller_login/utilisateur/');     

          }
    } 
    else
    {
      $data['service']=$this->M_creationDemande->afficherlesservices();
      
      $data['descriptions'] = "Ton message d'erreur";
        $this->load->view('creationDemande',$data);	
     
    }
  }
   function retour()
   {
      $this->load->library('session');
      $idUser=$_SESSION['idUser'];
      
    if(isset($_GET['btnHome']))
    {
      header('location:'.base_url().'index.php/Controller_login/utilisateur/'.$idUser);

    }
   
   }

 
}
?>