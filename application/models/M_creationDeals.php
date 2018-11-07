<?php
class M_creationDeals extends CI_Model
{
   
public function getAllDemandes()
     {
         $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $query = $this->db->query("
        SELECT idDemande, service.nomService, dateDemande, descriptionDemande 
        FROM demande, service 
        WHERE demande.idService = service.idService 
        AND demande.idUser ='".$_SESSION['idUser']."'");
        return $query->result();
     }
    public function getAllOffre()
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
       $query = $this->db->query("
       SELECT offre.descriptionOffre, offre.idOffre, offre.dateOffre, service.nomService
       FROM offre, service
       WHERE offre.idService = service.idService
       AND offre.idUser ='".$idUser."'");
       return $query->result();
    }

    public function getRecherche()
    {
    
    }
  
}?>