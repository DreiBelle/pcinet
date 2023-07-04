<?php
class ComputerService_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index() {   
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarAdmin_View";
            $this->load->view('ComputerService_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarTechnician_View";
            $this->load->view('Dashboard_View', $data);
        }
    }
}
