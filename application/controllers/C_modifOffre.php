
<?php

class C_modifOffre extends CI_Controller
{
public function modifOffre($idMonOffre)
   {
        $this->load->library('session');
      
       $this->load->model('M_modifOffre');
       $data['modifierMonOffre'] = $this->M_modifOffre->getAllModifOffre($idMonOffre);
       $dataa=(array) $data['modifierMonOffre'][0];
      $idOffre=$dataa['idOffre'];
      $this->session->set_userdata('idOffre',$idOffre);
    
       $this->load->view('modif_Offre',$data);     
   } 
   public function enregisterModifOffre()
   {

	
        $this->load->model('M_modifOffre');
        $descriOffre = $this->input->post('descriOffre');
        $dateOffre = $this->input->post('dateOffre');
        $setAllOffre['setAllOffre']= $this->M_modifOffre->setAllModifOffre($descriOffre,$dateOffre);
        $data['modifierMonOffre'] = $this->M_modifOffre->getAllModifOffre($idMonOffre);
        header('location:'.base_url().'index.php/Controller_login/utilisateur/');     
       
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