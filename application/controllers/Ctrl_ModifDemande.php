s<?php 
class Ctrl_ModifDemande extends CI_Controller
{
   public function modifDemande($idMaDemande)
   {
       $this->load->model('Model_ModifDemande');
       $data['modifierMaDemande'] = $this->Model_ModifDemande->getAllModifDemande($idMaDemande);
       $this->load->view('view_ModifDemande', $data);     
   } 
   public function enregisterModifDemande()
   {
       
       if(isset($_POST['btnValider']))
       {
        $this->load->model('Model_ModifDemande');
        $descriDemande = $this->input->post('descri');
        $dateDemande = $this->input->post('dateDem');
        $this->Model_ModifDemande->setAllModifDemande($descriDemande,$dateDemande);
       }
   }
}
?>