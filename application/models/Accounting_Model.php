<?php
class Accounting_Model extends CI_Model
{
    public function showModel()
    {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }
}

?>