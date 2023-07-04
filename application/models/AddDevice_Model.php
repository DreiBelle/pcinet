<?php
class AddDevice_Model extends CI_Model
{
    public function InsertDevice($data)
    {
        return $this->db->insert('devices', $data);
    }
}
