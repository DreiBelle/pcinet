<?php
class HumanResource_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('HumanResource_Model');

    }

    public function index()
    {

        $data['Employees'] = $this->HumanResource_Model->GetAllUsers();

        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('HumanResource_View', $data);
        } else {
            redirect('Login_Controller');
        }
    }

    public function AddEmployee()
    {
        $Name = $this->input->post('Name');
        $Department = $this->input->post('Department');
        $Position = $this->input->post('Position');
        $HireDate = $this->input->post('HireDate');

        $data = array(
            'Name' => $Name,
            'Department' => $Department,
            'Position' => $Position,
            'Hire_Date' => $HireDate,
        );

        $this->HumanResource_Model->AddEmployee($data);

        redirect('/HumanResource_Controller');
    }

    public function UpdateEmployee()
    {
        $ID = $this->input->post('ID');
        $Name = $this->input->post('Name');
        $Department = $this->input->post('Department');
        $Position = $this->input->post('Position');
        $HireDate = $this->input->post('HireDate');

        $data = array(
            'Name' => $Name,
            'Department' => $Department,
            'Position' => $Position,
            'Hire_Date' => $HireDate,
        );

        if ($this->input->post('Delete')) {
            $this->HumanResource_Model->DeleteEmployee($ID);
            redirect('/HumanResource_Controller');
        } else {
            $this->HumanResource_Model->UpdateEmployee($ID, $data);
            redirect('/HumanResource_Controller');
        }
    }
}