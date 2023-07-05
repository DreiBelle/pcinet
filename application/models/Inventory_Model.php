<?php
class Inventory_Model extends CI_Model
{
    public function GetAllItems()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function InsertItem($data)
    {
        return $this->db->insert('products', $data);
    }

    public function AddStock($ID, $data)
    {
        $this->db->set($data);
        $this->db->where('ItemID', $ID);
        $this->db->update('products');

        return $this->db->affected_rows() > 0;
    }
    public function getStocks($ID)
    {
        $this->db->select('ItemStock');
        $this->db->where('ItemID', $ID);
        $query = $this->db->get('products');

        if ($query->num_rows() > 0) {
            return $query->row()->ItemStock;
        } else {
            return 0;
        }
    }

    public function getExpenses($ID)
    {
        $this->db->select('TotalProductExpenses');
        $this->db->where('ItemID', $ID);
        $query = $this->db->get('products');

        if ($query->num_rows() > 0) {
            return $query->row()->TotalProductExpenses;
        } else {
            return 0;
        }
    }
}
?>