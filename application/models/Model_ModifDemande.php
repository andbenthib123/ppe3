<?php
class Model_ModifDemande extends CI_Model
{
    public function getAllModifDemande($idMaDemande)
    {
       $sql = $this->db->query("
       SELECT service.idService, service.nomService, service.photoService, demande.idDemande, demande.descriptionDemande, demande.dateDemande
       FROM service, demande
       WHERE service.idService = demande.idService
       AND demande.idDemande = '".$idMaDemande."'");
       return $sql->result();
    }
    public function setAllModifDemande($descriDemande,$dateDemande)
    {
        $data = array( 
            'descriptionDemande' => $descriDemande, 
            'dateDemande' => $dateDemande            
    );
    $this->db->update('demande',$data);
    }
}
?>
