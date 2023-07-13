<?php
class CustomerPurchase_Model extends CI_Model
{
    public function GetData()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function AddStock($ID, $data)
    {
        $this->db->set($data);
        $this->db->where('ItemID', $ID);
        $this->db->update('products');

        return $this->db->affected_rows() > 0;
    }

    public function GetDatabaseStock($ID)
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

    public function InsertExpense($data)
    {
        return $this->db->insert('purchases', $data);
    }

    public function GetMonitor()
    {
        $this->db->where('ItemCategory', 'Monitor');
        $this->db->where('ItemStock !=', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetCPU()
    {
        $this->db->where('ItemCategory', 'CPU');
        $this->db->where('ItemStock !=', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetGPU()
    {
        $this->db->where('ItemCategory', 'GPU');
        $this->db->where('ItemStock !=', 0);
        $query = $this->db->get('products');
        return $query->result();
    }


}