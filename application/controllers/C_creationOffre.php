<?php
class C_creationOffre extends CI_Controller
{
  function index()
  {
    $this->load->library('session');
    $this->load->model('M_Offre');
    $afficherIdOffre['idOffre']=$this->M_Offre->afficherIdOffre();

    $afficherIdOffre = (array) $afficherIdOffre['idOffre'][0];
    $idOffreProchain=$afficherIdOffre['idOffre'];
    $this->session->set_userdata('idOffre',$idOffreProchain);

    $service['service']=$this->M_Offre->afficherlesservice();
    $this->load->view('creationOffre', $service,$afficherIdOffre);    
  }

    
  function insererOffre()
    {
      $this->load->library('session');
      $idUser=$_SESSION['idUser'];
      $idOffre=$_GET['txtidOffre'];
      $descriptionOffre=$_GET['txtDescriptionsOffre'];
      $idservice=$_GET['txtSelect'];

      $this->load->model('M_Offre');
      $service['service']=$this->M_Offre->afficherlesservice();
      $insereOffre['insererOffre']=$this->M_Offre->M_insererOffre($descriptionOffre,$idservice,$idOffre);      
      $this->load->view('creationOffre',$insereOffre,$service);

     
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