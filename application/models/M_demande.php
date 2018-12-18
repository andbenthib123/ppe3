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
        $query=$this->db->query("select deal.idDeal as idDeal,deal.idEtat,service.nomService,user.photoUser,deal.noteUser1,deal.noteUser2,deal.idDeal ,deal.dateDeal,offre.idUser,user.nomUser 
        from service,user,deal,offre 
        where service.idService=offre.idService
         and  user.idUser=offre.idUser      
         and offre.idOffre=deal.idOffreUser2 
         and deal.idCreateur='".$idUser."'");
        return $query->result();   
    }
    public function getAllDeals($idMonDeal)
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $query=$this->db->query("select deal.idDeal as idDeal,deal.idEtat,service.nomService,user.photoUser,deal.noteUser1,deal.noteUser2,deal.idDeal ,deal.dateDeal,offre.idUser,user.nomUser 
        from service,user,deal,offre 
        where service.idService=offre.idService
         and  user.idUser=offre.idUser 
        and idDeal='".$idMonDeal."'
         and offre.idOffre=deal.idOffreUser2 
         and deal.idCreateur='".$idUser."'");
        return $query->result();   
    }
    public function getAllDealService()
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $sql = $this->db->query("SELECT deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.nomUser, service.nomService as service2, user.photoUser
        FROM deal, user, offre, etat,service
        WHERE deal.idOffreUser1 = offre.idOffre
        AND offre.idService = service.idService
        AND deal.idEtat = etat.idEtat
        AND deal.idCreateur = user.idUser
        AND user.idUser ='".$idUser."'");
        return $sql->result();

    }
    
  
}?>