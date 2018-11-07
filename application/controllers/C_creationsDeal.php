
<?php

class C_creationsDeal extends CI_Controller
{
public function index()
{

    $this->load->model('M_creationDeals');
    $data['lesDemandes']=$this->M_creationDeals->getAllDemandes();
    $data['lesOffres']=$this->M_creationDeals->getAllOffre();
    $this->load->view('creationDeals',$data);
}

function recupererLesDemandes()
{
  
}
}
?>