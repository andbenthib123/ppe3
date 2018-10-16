<?php

 
class M_demande extends CI_Model
{
   
public function getAllDemandes($idUser)
     {
        $query = $this->db->query("
        SELECT idDemande, service.nomService, dateDemande, descriptionDemande 
        FROM demande, service 
        WHERE demande.idService = service.idService 
        AND demande.idUser ='".$idUser."'");
        return $query->result();
     }
    public function getAllOffre($idUser)
    {
       $query = $this->db->query("
       SELECT offre.descriptionOffre, offre.idOffre, offre.dateOffre, service.nomService
       FROM offre, service
       WHERE offre.idService = service.idService
       AND offre.idUser ='".$idUser."'");
       return $query->result();
    }
}?>