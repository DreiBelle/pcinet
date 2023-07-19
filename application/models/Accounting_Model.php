<?php
class Accounting_Model extends CI_Model
{
    public function GetAllPayrollEmp()
    {
        $this->db->select('salary_employee.*, employees_hr.Name, employees_hr.Department');
        $this->db->from('salary_employee');
        $this->db->join('employees_hr', 'salary_employee.employee_id = employees_hr.employee_id', 'left');
        $query = $this->db->get();
        return $query->result();

    }

    public function GetAllExpenses()
    {
        $query = $this->db->get('expenses');
        return $query->result();
    }

    public function GetAllSales()
    {
        $query = $this->db->get('sales');
        return $query->result();
    }

    public function AddSalary($ID, $data)
    {
        $this->db->set($data);
        $this->db->where('Employee_ID', $ID);
        $this->db->update('salary_employee');

        return $this->db->affected_rows() > 0;
    }

    public function CalculateTotal()
    {
        $query = $this->db->select('SUM(TotalPrice) AS Total')
            ->from('sales')
            ->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->Total;
        }

        return 0;
    }

    public function GetItems()
    {
        $query = $this->db->get('sales_items');
        return $query->result();
    }

    public function GetItembyID($ID)
    {
        $this->db->like('ItemID', $ID);
        return $this->db->get('sales_items')->result();
    }
}

?>