<?php
class Model_ModifDemande extends CI_Model
{
    public function getAllModifDemande($idMaDemande)
    {
       $sql = $this->db->query("
       SELECT service.idService, demande.dateDemande,service.nomService, service.photoService, idDemande, demande.descriptionDemande, demande.dateDemande
       FROM service, demande
       WHERE service.idService = demande.idService
       AND idDemande = '".$idMaDemande."'");
       return $sql->result();
    }
    public function setAllModifDemande($descriDemande,$dateDemande)
    {
        $this->load->library('session');
        $idDemande = $this->session->userdata('idDemande');
        $sql = $this->db->query("update demande set descriptionDemande ='".$descriDemande."' ,dateDemande='".$dateDemande."' where idDemande='".$idDemande."'");           
    }
}
?>
