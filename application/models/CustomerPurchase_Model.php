<?php
class CustomerPurchase_Model extends CI_Model
{
    public function GetData()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function InsertExpense($data)
    {
        return $this->db->insert('purchases', $data);
    }

    public function GetMonitor()
    {
        $this->db->where('ItemCategory', 'Monitor');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetCPU()
    {
        $this->db->where('ItemCategory', 'CPU');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetGPU()
    {
        $this->db->where('ItemCategory', 'GPU');
        $query = $this->db->get('products');
        return $query->result();
    }
}