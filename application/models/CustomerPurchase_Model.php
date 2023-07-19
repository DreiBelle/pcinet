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
        $this->db->where('ItemID', $ID);
        $this->db->update('products', $data);

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
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetCPU()
    {
        $this->db->where('ItemCategory', 'CPU');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetGPU()
    {
        $this->db->where('ItemCategory', 'GPU');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }


    public function GetKeyboard()
    {
        $this->db->where('ItemCategory', 'Keyboard');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetSSD()
    {
        $this->db->where('ItemCategory', 'SSD');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetRAM()
    {
        $this->db->where('ItemCategory', 'RAM');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetMouse()
    {
        $this->db->where('ItemCategory', 'Mouse');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetHHD()
    {
        $this->db->where('ItemCategory', 'HHD');
        $this->db->where('ItemStock >', 0);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function GetLastestID()
    {
        $query = $this->db->query("SELECT MAX(ID) AS max_id FROM sales");
        $row = $query->row();
        $maxID = $row->max_id;
        $nextID = $maxID + 1;
        return $nextID;
    }
}