 
<?php
class C_creationsDeals extends CI_Controller
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
    $txtrecherche=$_GET['recherche'];
    $this->load->model('M_creationDeals');
    $data['user']=$this->M_creationDeals->getRecherche($txtrecherche);
    $this->load->view("afficherLesUsers",$data);
   
}

public function ajouterDeals()
    {
        $this->load->model("M_creationDeals");
        $data['ajoutDeals'] = $this->M_creationDeals->ajouterDeals($_GET['idOffreUser1'], $_GET['idOffreUser2']);
    }

public function noteDeals($idMonDeal)
{
    $this->load->model("M_demande");
    $data['idDeal']=$this->M_demande->getAllDeals($idMonDeal);
    $data['serviceUser2'] = $this->M_demande->getAllDealService();
    $afficherDeal2emeUtilisateur=(array) $data['serviceUser2'][0];
    $nomservice2emeUtilisateur=$afficherDeal2emeUtilisateur['service2'];
    $this->session->set_userdata('service2',$nomservice2emeUtilisateur);

    $afficherDeals=(array) $data['idDeal'][0];
    $idUnDeal=$afficherDeals['idDeal'];
    $note1=$afficherDeals['noteUser1'];
    $note2=$afficherDeals['noteUser2'];
    $nomUser2=$afficherDeals['nomUser'];
    $nomService=$afficherDeals['nomService'];

    $this->session->set_userdata('noteUser1',$note1);
    $this->session->set_userdata('noteUser2',$note2);
    $this->session->set_userdata('nomUser',$nomUser2);
    $this->session->set_userdata('idDeal',$idUnDeal);
    $this->session->set_userdata('nomService',$nomService);
    $this->load->view("noteDeals",$data);

}
}

?>