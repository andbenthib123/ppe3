<?php

class M_creationFormulaire extends CI_Model
{
    function M_formulaire($idDemande,$descriptionDemande,$idservice)
    {
        $this->load->library('session');

        $user=$this->session->userdata('idUser');
        $data = array( 
            'idDemande'=>$idservice,
            'descriptionDemande'=>$idDemande,
            'dateDemande'=>date('y-m-d'),
            'idService'=>$descriptionDemande,
            'idUser'=>$user);
            $this->db->insert('demande', $data);
            
    }


    function afficherlesservice()
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