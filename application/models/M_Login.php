<?php

class M_Login extends CI_Model
{
  public function index($login,$mdp)
     {
      

       $sql = $this->db->query("select idUser,login,mdp,nomUser,photoUser from user where login ='".$login."' and mdp = '".$mdp."'");
      return $sql->result();
      
     }


     public function inscription($idUser,$nomPrenom,$login,$motDePasse,$photo)
     {  
      $data = array( 
        'idUser'=>$idUser,
        'nomUser'	=>$nomPrenom,
        'login'=>$login,
        'mdp'=>$motDePasse,
         'photoUser'=>$photo);

        $this->db->insert('user', $data);
     }
    
}
?>