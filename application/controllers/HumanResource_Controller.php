<?php
class HumanResource_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('HumanResource_Model');
        
    }

    public function index() {

        $data['users'] = $this->HumanResource_Model->GetAllUsers();
        
        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavBar/NavbarAdmin_View";
            $this->load->view('HumanResource_View', $data);
        }
        else {
            redirect('Login_Controller');
        }
    }
}
