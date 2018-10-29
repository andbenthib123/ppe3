<?php

class M_Offre extends CI_Model
{
    function M_insererOffre($descriptionOffre,$idservice)
    {
        $this->load->library('session');
        $idOffre=$this->session->userdata('idOffre');
        $user=$this->session->userdata('idUser');
        $data = array( 
            'idOffre'=>$idOffre,
            'descriptionOffre'=>$descriptionOffre,
            'dateOffre'=>date('y-m-d'),
            'idService'=>$idservice,
            'idUser'=>$user);
            $this->db->insert('offre', $data);
            
    }


    function afficherlesservices()
    {
        $sql=$this->db->query('select idService,nomService from service');
        return $sql->result();

    }

    function afficherIdOffre()
    {
       $sql=$this->db->query("select max(idOffre)+1 as idOffre from offre");
       return $sql->result();


    }
    
}



?>