<?php
class M_creationDeals extends CI_Model
{
   
public function getAllDemandes()
     {
         $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $query = $this->db->query("
        SELECT idDemande, service.nomService,service.idService ,dateDemande, descriptionDemande 
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
       SELECT offre.descriptionOffre,service.idService, offre.idOffre, offre.dateOffre, service.nomService
       FROM offre, service
       WHERE offre.idService = service.idService
       AND offre.idUser ='".$idUser."'");
       return $query->result();
    }

public function DemandeUserSelectionne($idleUser)
{
    $this->load->library('session');
    $idUser=$this->session->userdata('idUser');
    $query = $this->db->query("select idDemande, descriptionDemande, dateDemande,service.idService,service.nomService
    FROM demande, service
    WHERE demande.idService = service.idService
    AND idUser='".$idleUser."'");
return $query->result();
}

public function OffreUserSelectionne($idleUser)
{
    $this->load->library('session');
    $idUser=$this->session->userdata('idUser');
    $query= $this->db->query("select idOffre, descriptionOffre, dateOffre,service.idService,service.nomService
    FROM offre,service
    WHERE offre.idService = service.idService
    AND idUser='".$idleUser."'");
return $query->result();
}

public function ajouterDeals($idOffreUser1, $idOffreUser2)
    {
    $query=$this->db->query("SELECT offre.descriptionOffre, user.nomUser,user.idUser
    from user,offre 
    WHERE offre.idUser = user.idUser 
    and offre.descriptionOffre like '".$txtRecherche."'");
    return $query->result();   
}

public function recupServiceDeDemande()
{
    $this->load->library('session');
    $idUser=$this->session->userdata('idUser');
    $query= $this->db->query("select demande.idService FROM demande WHERE demande.idDemande=1");
return $query->result();
}



    public function getRecherche($txtRecherche)
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $query=$this->db->query("select user.idUser,user.photoUser,offre.descriptionOffre, user.nomUser,user.idUser,offre.idService from user,offre,service WHERE offre.idService=service.idService and offre.idUser=user.idUser and offre.idUser!='".$idUser."' and service.nomService like '%".$txtRecherche."%'  group by user.nomUser");
        return $query->result();   
    }
  
public function lienDeal()
{
$query=$this->db->query("select offre.idOffre from offre where offre.idUser='1' and exists(select demande.idDemande from demande where offre.idOffre=demande.idDemande and demande.idUser='1')");
}







}?>