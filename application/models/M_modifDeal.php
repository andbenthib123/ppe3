<?php
class M_modifDeal extends CI_Model
{
    public function getAllInfoDeal($idMonDeal)
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $query = $this->db->query("select deal.idEtat, service.nomService, user.photoUser, deal.noteUser1, deal.noteUser2, deal.idDeal, offre.idUser, user.nomUser, deal.idCreateur
        from service, user, deal, offre 
        where service.idService=offre.idService
        and  user.idUser=offre.idUser 
        and offre.idOffre=deal.idOffreUser2 
        GROUP BY user.nomUser
        and deal.idDeal ='".$idMonDeal."'");
    }
    public function getAllInfoDealUser2()
    {
        $this->load->library('session');
        $idUser=$this->session->userdata('idUser');
        $sql = $this->db->query("SELECT deal.idDeal, deal.dateDeal, deal.noteUser1, deal.noteUser2, user.nomUser, service.nomService, user.photoUser
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