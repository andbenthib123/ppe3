<?php
class Model_Donnee extends CI_Model
{
    public function getAllDemandes()
    {
       $query = $this->db->query('select idDemande, descriptionDemande from demande where idUser = 1');
       return $query->result();
    }

   public function getAllOffre()
   {
   $query = $this->db->query('select idOffre, descriptionOffre from offre where idUser = 1');
   return $query->result();
   }
}
?>

