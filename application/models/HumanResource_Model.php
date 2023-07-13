<?php
class HumanResource_Model extends CI_Model
{
    public function GetAllUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }
}
?>