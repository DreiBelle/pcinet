<?php
class Accountant_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }


    public function index() {
        $user = $this->session->userdata('user');
        if ($user) {
            $data['user'] = $user;
            $this->load->view('Accountant_View', $data);
        }
        else {
            redirect('LoginController');
        }
    }
}
