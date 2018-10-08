<?php
class M_Login extends CI_Model
{
  public function index($login,$mdp)
     {
         $this->db->select('idUser,login,mdp');
         $this->db->from('user');
         $this->db->where('login',$login);
         $this->db->where('mdp',$mdp);
         $query=$this->db->get();
         
       

}
}
?>