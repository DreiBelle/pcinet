<?php
class Inventory_Model extends CI_Model
{
    public function GetAllItems()
    {
        $query = $this->db->get('items');
        return $query->result();
    }

    public function InsertItem($data)
    {
        return $this->db->insert('items', $data);
    }
}
?>