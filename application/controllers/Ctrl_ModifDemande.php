<?php 
class Ctrl_ModifDemande extends CI_Controller
{
   public function modifDemande($idMaDemande)
   {
    $this->load->library('session');

    $this->load->model('Model_ModifDemande');
    $data['modifierMaDemande'] = $this->Model_ModifDemande->getAllModifDemande($idMaDemande);
    $dataa=(array) $data['modifierMaDemande'][0];
    $idDemande=$dataa['idDemande'];
    $this->session->set_userdata('idDemande',$idDemande);
    var_dump($_SESSION['idDemande']);
    $this->load->view('view_ModifDemande', $data);
   } 
   public function enregisterModifDemande()
   {
    $this->load->model('Model_ModifDemande');
    $descriDemande = $this->input->post('descri');
    $dateDemande = $this->input->post('dateDemande');
    $setAllDemande['setAllDemande']= $this->Model_ModifDemande->setAllModifDemande($descriDemande,$dateDemande);
    $data['modifierMaDemande'] = $this->Model_ModifDemande->getAllModifDemande($idMaDemande);
    $this->load->view("test",$setAllDemande,$data);
   }
}
?>