<?php
class C_noteDeal extends CI_Controller
{
    public function index($idMonDeal)
    {
        $this->load->model('M_modifDeal');
        $this->load->library('session');
        $data['infoDeal'] = $this->M_modifDeal->getAllInfoDeal($idMonDeal); 
        $data['infoDealUser2'] = $this->M_modifDeal->getAllInfoDealUser2();
        $this->load->view("Note_Deal", $data);
    
    }
    
}
?>