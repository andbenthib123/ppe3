<?php

class M_modifOffre extends CI_Model
{

public function getAllModifOffre($idMonOffre)
{
   
   $sql = $this->db->query("
   SELECT service.idService, service.nomService, service.photoService,idOffre, offre.descriptionOffre, offre.dateOffre
   FROM service, offre
   WHERE service.idService = offre.idService
   AND idOffre ='".$idMonOffre."'");
   return $sql->result();
}
public function setAllModifOffre($descriOffre,$dateOffre)
    {
        $this->load->library('session');

        $idOffree=$this->session->userdata('idOffre');
        $sql = $this->db->query("update offre set descriptionOffre ='".$descriDemande."',dateOffre='".$dateDemande."' where idDemande='".$idOffree."'");
    }
}
?>
