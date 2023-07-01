<?php
class Login_Model extends CI_Model
{
    public function getuser($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }
}

?>