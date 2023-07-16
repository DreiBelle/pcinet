<?php
class HumanResource_Model extends CI_Model
{
    public function GetAllUsers()
    {
        $query = $this->db->get('employees_hr');
        return $query->result();
    }

    public function AddEmployee($data)
    {
        $this->db->insert('employees_hr', $data);
        $employee_id = $this->db->insert_id();

        $salary_data = array(
            'Employee_ID' => $employee_id,
            'Salary' => 0,
            'Pay_Date' => 0,
        );

        $this->db->insert('salary_employee', $salary_data);
    }

    public function UpdateEmployee($ID, $data)
    {
        $this->db->set($data);
        $this->db->where('Employee_ID', $ID);
        $this->db->update('employees_hr');

        return $this->db->affected_rows() > 0;
    }

    public function DeleteEmployee($ID)
    {
        $this->db->where('Employee_ID', $ID);
        $this->db->delete('employees_hr');

        return $this->db->affected_rows() > 0;
    }
}
?>