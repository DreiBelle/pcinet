<?php
class HumanResource_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index() {
        
        $user = $this->session->userdata('user');
        if ($user['role'] == "admin") {
            $data['user'] = $user;
            $data['navbar'] = "NavbarAdmin_View";
            $this->load->view('HumanResource_View', $data);
        }
        else {
            redirect('Login_Controller');
        }
    }
}
