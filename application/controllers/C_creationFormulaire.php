<?php
class C_creationFormulaire extends CI_Controller
{
  function index()
  {
    $this->load->library('session');
    $this->load->model('M_creationFormulaire');
    $afficherIdDemande['iddemande']=$this->M_creationFormulaire->afficherIdDemande();

    $afficherIdDemande = (array) $afficherIdDemande['iddemande'][0];
    $idDemandeProchain=$afficherIdDemande['idDemande'];
    $this->session->set_userdata('iddemande',$idDemandeProchain);

    $service['service']=$this->M_creationFormulaire->afficherlesservice();
    $this->load->view('creationFormulaire', $service,$afficherIdDemande);    
  }

    
  function insererFormulaire()
    {
      $this->load->library('session');
      $idUser=$_SESSION['idUser'];
      $idDemande=$_GET['txtidDemande'];
      $descriptionDemande=$_GET['txtDescriptions'];
      $idservice=$_GET['txtSelect'];

      $this->load->model('M_creationFormulaire');
      $service['service']=$this->M_creationFormulaire->afficherlesservice();
      $choisirservice['nomservice']=$this->M_creationFormulaire->M_formulaire($descriptionDemande,$idservice,$idDemande);      
      $this->load->view('creationFormulaire',$choisirservice,$service);

     
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