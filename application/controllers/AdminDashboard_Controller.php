<?php
class AdminDashboard_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }


    public function index() {
        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "Navbar_View";
            $this->load->view('AdminDashboard_View', $data);
        } else if ($user['role'] == "technician") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarTechnician_View";
            $this->load->view('TechnicianDashboard_View', $data);
            redirect('AdminDashboard_Controller');
        }
    }
}
