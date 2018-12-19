<?php

class M_modifDemande extends CI_Model
{

public function getAllModifDemande($idMaDemande)
{
   
   $sql = $this->db->query("
   SELECT service.idService, service.nomService, service.photoService,idDemande, demande.descriptionDemande, demande.dateDemande
   FROM service, demande
   WHERE service.idService = demande.idService
   AND idDemande ='".$idMaDemande."'");
   return $sql->result();
}
public function setAllModifDemande($descriDemande,$dateDemande)
    {
        $this->load->library('session');
        $idDem=$this->session->userdata('idDemande');
        $sql = $this->db->query("update demande set descriptionDemande ='".$descriDemande."',dateDemande='".$dateDemande."' where idDemande='".$idDem."'");
    }
}
?>
