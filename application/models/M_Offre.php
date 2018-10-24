<?php

class M_Offre extends CI_Model
{
    function M_insererOffre($idOffre,$descriptionOffre,$idservice)
    {
        $this->load->library('session');

        $user=$this->session->userdata('idUser');
        $data = array( 
            'idOffre'=>$idservice,
            'descriptionOffre'=>$idOffre,
            'dateOffre'=>date('y-m-d'),
            'idService'=>$descriptionOffre,
            'idUser'=>$user);
            $this->db->insert('offre', $data);
            
    }


    function afficherlesservice()
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