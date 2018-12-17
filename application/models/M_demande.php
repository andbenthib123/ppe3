<?php
class M_demande extends CI_Model
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

    public function getAllDeal()
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $sql = $this->db->query("select user.photoUser, user.nomUser,deal.idDeal, service.nomService, deal.dateDeal, deal.noteUser1, deal.noteUser2
        FROM deal, user, offre, etat, service
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idService = service.idService
        AND deal.idEtat = etat.idEtat
        AND deal.idCreateur = user.idUser
        AND deal.idCreateur ='".$idUser."'");
        return $sql->result();   
    }
    public function getAllDealService()
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $sql = $this->db->query("select deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.nomUser, service.nomService, user.photoUser
        FROM deal, user, offre, etat, service
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idService = service.idService
        AND deal.idEtat = etat.idEtat
        AND deal.idCreateur = user.idUser
        AND user.idUser ='".$idUser."'");
        return $sql->result();

    }
   

}
?>