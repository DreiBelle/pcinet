<?php
class Inventory_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index() {
        
        $user = $this->session->userdata('user');

        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarAdmin_View";
            $this->load->view('Inventory_View', $data);
        } else if ($user['role'] == "employee") {
            $data['user'] = $user;
            $data['navbar'] = "NavBarEmployee_View";
            $this->load->view('Dashboard_View', $data);
        }
    }
}
