<?php
class Dashboard_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }


    public function index() {
        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('Dashboard_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
        else if ($user['role'] == "employee") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarEmployee_View";
            $this->load->view('Dashboard_View', $data);
        }
        else if ($user['role'] == "accountant") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAccounting_View";
            $this->load->view('Dashboard_View', $data);
        }
        else if ($user['role'] == "data") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarData_View";
            $this->load->view('Dashboard_View', $data);
        }
    }
}
