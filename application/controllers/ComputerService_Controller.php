<?php
class ComputerService_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AddDevice_Model');
    }

    public function index()
    {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('ComputerService_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
    }

    public function ViewDevices()
    {
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('ComputerServiceOptions_View/ViewDevice_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('ComputerServiceOptions_View/ViewDevice_View', $data);
        }
    }

    public function AddDevice()
    {
        $DeviceID = $this->input->post('DeviceID');

        $data = array(
            'DeviceID' => $DeviceID,
        );

        $this->AddDevice_Model->InsertDevice($data);

        redirect('/ComputerService_Controller/ViewDevices');
    }
}