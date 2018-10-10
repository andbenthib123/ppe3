<?php
class Model_Donnee extends CI_Model
{
    public function getAllDemandes()
    {
       $query = $this->db->query('
       SELECT idDemande, service.nomService, dateDemande, descriptionDemande 
       FROM demande, service 
       WHERE demande.idService = service.idService 
       AND demande.idUser = 5');
       return $query->result();
    }

   public function getAllOffre()
   {
      $query = $this->db->query('
      SELECT offre.descriptionOffre, offre.idOffre, offre.dateOffre, service.nomService
      FROM offre, service
      WHERE offre.idService = service.idService
      AND offre.idUser = 5');
      return $query->result();
   }
  
}
?>

