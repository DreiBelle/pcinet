<?php
class AddDevice_Model extends CI_Model
{
    public function InsertDevice($data)
    {
        return $this->db->insert('deviceinformation', $data);
    }

    public function GetData(){
        $query = $this->db->get('deviceinformation');
        return $query->result();
    }
}
