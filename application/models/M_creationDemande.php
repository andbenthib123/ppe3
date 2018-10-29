<?php

class M_creationDemande extends CI_Model
{
    function M_insererDemande($descriptionDemande,$idservice)
    {
        $this->load->library('session');

        $user=$this->session->userdata('idUser');
        $idDemande=$this->session->userdata('idDemande');
        $data = array( 
            'idDemande'=>$idDemande,
            'descriptionDemande'=>$descriptionDemande,
            'dateDemande'=>date('y-m-d'),
            'idService'=>$idservice,
            'idUser'=>$user);
            $this->db->insert('demande', $data);
            
    }


    function afficherlesservices()
    {
        $sql=$this->db->query('select idService,nomService from service');
        return $sql->result();

    }

    function afficherIdDemande()
    {
       $sql=$this->db->query("select max(idDemande)+1 as idDemande from demande");
       return $sql->result();


    }
    
}



?>