<?php
class M_Login extends CI_Model
{
  public function index($login,$mdp)
     {
        //  $this->db->select('idUser,login,mdp');
        //  $this->db->from('user');
        //  $this->db->where('login',$login);
        //  $this->db->where('mdp',$mdp);
         
        //  return $this->db->get();
         //return $query;
       $sql = $this->db->query("select idUser,login,mdp from user where login ='".$login."' and mdp = '".$mdp."'");
return $sql->result();
}
}
?>