<?php
class CustomerPurchase_Model extends CI_Model
{
    public function GetData()
    {
        $query = $this->db->get('products');
        return $query->result();
    }
}