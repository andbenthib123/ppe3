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

    $service['service']=$this->M_Offre->afficherlesservices();
    $this->load->view('creationOffre',$service,$afficherIdOffre);    
  }

  function insererOffre()
    {
         $this->load->library('session');
        $this->load->model('M_Offre'); 

        $service['service']=$this->M_Offre->afficherlesservices();   
        $idUser=$_SESSION['idUser'];
        $descriptionOffre=$_POST['txtDescriptionsOffre'];
        $idservice=$_POST['txtSelect'];
       
       
        if(!empty($_POST['txtDescriptionsOffre']))
        {
          if($_POST['txtSelect']==null)
          {     
            $data['service']=$this->M_Offre->afficherlesservices();
            $data['select'] = "Ton message d'erreur";
            $this->load->view('creationOffre',$data);	
    
        }
        else
        {   
          $insereOffre['insererOffre']=$this->M_Offre->M_insererOffre($descriptionOffre,$idservice);           
         
          header('location:'.base_url().'index.php/Controller_login/utilisateur/');     

        }
      }
      else
      {
    
        $data['service']=$this->M_Offre->afficherlesservices();
        $data['descriptions'] = "Ton message d'erreur";     	
        $this->load->view('creationOffre',$data);	
      } 
     
    } 
   function retour()
   {
      $this->load->library('session');
      $idUser=$_SESSION['idUser'];
    if(isset($_POST['btnHome']))
    {
      header('location:'.base_url().'index.php/Controller_login/utilisateur/'.$idUser);

    }
   
   }
}
?>