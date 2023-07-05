<?php
class AddDevice_Model extends CI_Model
{
    public function InsertDevice($data)
    {
        return $this->db->insert('deviceinformation', $data);
    }

    public function GetData()
    {
        $query = $this->db->get('deviceinformation');
        return $query->result();
    }

    public function UpdateDevice($DeviceID, $data)
    {
        $this->db->set($data);
        $this->db->where('DeviceID', $DeviceID);
        $this->db->update('deviceinformation');

        return $this->db->affected_rows() > 0;
    }

    public function DeleteDevice($DeviceID)
    {
        $this->db->where('DeviceID', $DeviceID);
        $this->db->delete('deviceinformation');

        return $this->db->affected_rows() > 0;
    }

    public function GetIDData($searchDeviceID)
    {
        $this->db->like('DeviceID', $searchDeviceID);
        return $this->db->get('deviceinformation')->result();
    }

}