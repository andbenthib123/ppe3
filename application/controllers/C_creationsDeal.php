
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

public function afficherLesUsers()
{
    $txtRecherche=$_GET['txtRecherche'];
    $this->load->model('M_creationDeals');
    $data['lesUsers']=$this->M_creationDeals->getRecherche($txtRecherche);
    $this->load->view('afficherLesUsers',$data);


}

}
?>